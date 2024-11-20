<?php

namespace App\Controllers;

use App\Models\userModel;
use App\Models\ActivationModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class authController extends BaseController
{
    public function __construct()
    {
        // Load form and URL helpers
        helper(['form', 'url']);
    }

    // Method to disable caching
    private function disableCaching()
    {
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
        $this->response->setHeader('Pragma', 'no-cache');
    }
    // ADMIN AUTH
    public function userRegister()
    {
        // Disable caching for this method
        $this->disableCaching();
        return view('register');
    }

    public function fetchUserRegister()
    {
        // Load the model
        $userModel = new UserModel();
        $activationModel = new ActivationModel();
        // Get form input
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'fullname' => $this->request->getPost('fullname'),
            'email'    => $this->request->getPost('email'),
            'role'     => 'shop_owner' // Default role for registration
        ];

        // Save the user data
        if ($userModel->save($data)) {
            $userId = $userModel->getInsertID();

            // Generate a token (you can use something like random_bytes or openssl_random_pseudo_bytes for more security)
            $token = bin2hex(random_bytes(32));

            // Calculate expiration time (10 minutes from now)
            $expiresAt = date('Y-m-d H:i:s', strtotime('+10 minutes'));

            // Save the token in the activation table
            $activationData = [
                'user_id'    => $userId,
                'token'      => $token,
                'created_at' => date('Y-m-d H:i:s'),
                'expires_at' => $expiresAt,
            ];

            $activationModel->save($activationData);

            // Send email with the token (you'll implement this function)
            $this->sendVerificationEmail($data['email'], $token);

            return redirect()->to(base_url('auth/login'))->with('success', 'Registration Successful! Please check your email for activation.');
        } else {
            return redirect()->back()->with('error', 'Registration failed, please try again.');
        }
    }
    public function sendVerificationEmail($email, $token)
    {
        // Include PHPMailer classes
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';           // Specify main SMTP server
            $mail->SMTPAuth   = true;                       // Enable SMTP authentication
            $mail->Username   = 'm.habibirizq@students.polmed.ac.id'; // Your email address
            $mail->Password   = 'New_Polmed_Account_New_Password69';  // Your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Enable TLS encryption
            $mail->Port       = 587;                        // TCP port to connect to

            // Recipients
            $mail->setFrom('m.habibirizq@students.polmed.ac.id', 'TRPL SHOP'); // Sender's email and name
            $mail->addAddress($email);                      // Add recipient

            // Content
            $verificationUrl = base_url("auth/verify/{$token}");
            $mail->isHTML(true);                            // Set email format to HTML
            $mail->Subject = 'Email Verification';
            $mail->Body    = "Please click the link below to verify your email address:<br><br>
                          <a href='{$verificationUrl}'>Verify Email</a>";
            $mail->AltBody = "Please click the link below to verify your email address:\n\n{$verificationUrl}";

            // Send the email
            $mail->send();
        } catch (Exception $e) {
            // Log error message
            log_message('error', 'Email could not be sent. Error: ' . $mail->ErrorInfo);
        }
    }



    public function verify($token)
    {
        $activationModel = new \App\Models\ActivationModel();

        // Find the activation token
        $activation = $activationModel->where('token', $token)->first();

        if (!$activation) {
            return redirect()->to(base_url('auth/login'))->with('error', 'Invalid token.');
        }

        // Check if the token has expired
        $currentDate = date('Y-m-d H:i:s');
        if (strtotime($activation['expired_at']) < strtotime($currentDate)) {
            return redirect()->to(base_url('auth/login'))->with('error', 'Token has expired.');
        }

        // If valid, activate the user (you can update the status of the user to 'active')
        $userModel = new \App\Models\UserModel();
        $userModel->update($activation['user_id'], ['status' => 'active']);

        // Optionally, delete the token after use to prevent re-use
        $activationModel->delete($activation['id']);

        return redirect()->to(base_url('auth/login'))->with('success', 'Email verified successfully! You can now log in.');
    }



    public function userLogin()
    {
        // Disable caching for this method
        $this->disableCaching();
        return view('login');
    }

    public function adminAuth()
    {
        $userModel = new userModel();

        // Retrieve form data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Find user by username
        $user = $userModel->where('username', $username)->first();

        // Check if user exists
        if ($user) {
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Set session data for logged-in user
                $sessionData = [
                    'user_id'   => $user['user_id'],
                    'username'  => $user['username'],
                    'fullname'  => $user['fullname'],
                    'email'     => $user['email'],
                    'role'      => $user['role'],
                    'logged_in' => TRUE
                ];
                session()->set($sessionData);
                if ($user['role'] == 'shop_owner') {
                    // Redirect to the dashboard with a success message
                    return redirect()->to('/dashboard?message=login_success');
                } else {
                    return redirect()->to('');
                }
            } else {
                // If password is incorrect
                return redirect()->to('/auth/login?message=invalid_password');
            }
        } else {
            // If username is not found
            return redirect()->to('/auth/login?message=username_not_found');
        }
    }


    public function index(): string
    {
        $session = session();
        echo "Welcome back, " . $session->get('username');
        return view('admin/index');
    }

    public function logoutAdmin()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login')->with('success', 'Logged out successfully.');
    }
}
