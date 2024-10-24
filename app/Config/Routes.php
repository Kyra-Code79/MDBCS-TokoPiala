<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::beforeUserDashboard');
$routes->get('/login', 'Home::login');
$routes->get('/recover-password', 'Home::recoverPassword');
$routes->get('/register', 'Home::register');
$routes->get('/product-detail', 'Home::beforeUserProduct');
$routes->get('/shopping-cart', 'Home::UserCart');
$routes->get('/checkout', 'Home::UserCheckout');
$routes->get('/order', 'Home::UserOrder');
$routes->get('/invoiceList', 'Home::UserInvoiceList');
$routes->get('/invoiceTemplate', 'Home::UserInvoiceTemplate');

// Admin Pages
$routes->get('/auth/login', 'authController::adminLogin');
$routes->get('/auth/register', 'authController::adminRegister');

// Admin Login and Register Post Requests
$routes->post('/login/auth', 'authController::adminAuth');
$routes->post('/register/auth', 'authController::ownerRegister'); // This handles the registration form

// Logout and Dashboard
$routes->get('/logoutAdmin', 'authController::logoutAdmin');
$routes->get('/dashboard', 'authController::index', ['filter' => 'authGuard']);

// Detail Produk
$routes->get('/admin-product-detail', 'adminController::productList', ['filter' => 'authGuard']);
// Add Produk
$routes->get('/admin-add-product', 'adminController::AdminAddProduct', ['filter' => 'authGuard']);
$routes->post('/admin-product/add', 'adminController::addProduct');
