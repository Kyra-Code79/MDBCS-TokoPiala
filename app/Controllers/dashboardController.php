<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class dashboardController extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        return view('dashboard', [
            'username' => $session->get('username'),
            'role'     => $session->get('role')
        ]);
    }
}
