<?php

namespace App\Controllers;

use App\Models\userModel;

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
    public function adminRegister()
    {
        // Disable caching for this method
        $this->disableCaching();
        return view('admin/register');
    }

    public function ownerRegister()
    {
        // Load the model
        $userModel = new UserModel();

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
            return redirect()->to(base_url('auth/login'))->with('success', 'Registration Successful! Please login.');
        } else {
            return redirect()->back()->with('error', 'Registration failed, please try again.');
        }
    }

    public function adminLogin()
    {
        // Disable caching for this method
        $this->disableCaching();
        return view('admin/login');
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

                // Redirect to the dashboard with a success message
                return redirect()->to('/dashboard?message=login_success');
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
