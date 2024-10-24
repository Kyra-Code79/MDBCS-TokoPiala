<?php

namespace App\Controllers;

use App\Models\userModel;

class Home extends BaseController
{

    public function login()
    {
        return view('user/login');
    }
    public function register()
    {
        return view('user/register');
    }
    public function beforeUserDashboard()
    {
        return view('user/not-login/ecommerce-product-shop');
    }
    public function beforeUserProduct()
    {
        return view('user/not-login/ecommerce-product-detail');
    }
    public function recoverPassword()
    {
        return view('user/recover-password');
    }
    public function UserCart()
    {
        return view('user/ecommerce-shopping-cart');
    }
    public function UserCheckout()
    {
        return view('user/ecommerce-checkout');
    }
    public function UserOrder()
    {
        return view('user/ecommerce-order');
    }
    public function UserInvoiceList()
    {
        return view('user/invoice-list');
    }
    public function UserInvoiceTemplate()
    {
        return view('user/invoice-template');
    }
}
