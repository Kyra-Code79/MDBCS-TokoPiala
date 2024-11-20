<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::beforeUserDashboard');
$routes->get('/recover-password', 'Home::recoverPassword');
$routes->get('/register', 'Home::register');
$routes->get('/product-detail/(:num)', 'Home::beforeUserProduct/$1');
$routes->get('/shopping-cart', 'Home::UserCart');
$routes->get('/checkout', 'Home::UserCheckout');
$routes->get('/order', 'Home::UserOrder');

$routes->get('/invoiceTemplate', 'Home::UserInvoiceTemplate');

// ======= ADMIN ROUTES STARTS ========
// Admin Pages
$routes->get('/auth/login', 'authController::userLogin');
$routes->get('/auth/register', 'authController::userRegister');
$routes->get('auth/verify/(:any)', 'AuthController::verify/$1');

// Admin Login and Register Post Requests
$routes->post('/login/auth', 'authController::adminAuth');
$routes->post('/register/auth', 'authController::fetchUserRegister'); // This handles the registration form

// Logout and Dashboard
$routes->get('/logoutAdmin', 'authController::logoutAdmin');
$routes->get('/dashboard', 'authController::index', ['filter' => 'authGuard']);

// Detail Kategori
$routes->get('/admin-kategori-detail', 'adminController::kategoriList');
// Add Kategori
$routes->post('/admin-kategori/add', 'adminController::addKategori');
// Update Kategori
$routes->post('/admin-kategori/update/(:num)', 'adminController::updateKategori/$1');
// Delete Kategori
$routes->get('/admin-kategori/delete/(:num)', 'adminController::deleteKategori/$1');

// Detail Produk
$routes->get('/admin-product-detail', 'adminController::productList', ['filter' => 'authGuard']);
// Add Produk
$routes->get('/admin-add-product', 'adminController::AdminAddProduct', ['filter' => 'authGuard']);
$routes->post('/admin-product/add', 'adminController::addProduct');
// Edit Produk
$routes->post('/admin-product/update/(:num)', 'adminController::updateProduct/$1');
// Delete Produk
$routes->get('/admin-product/delete/(:num)', 'adminController::deleteProduct/$1');

// invoice
// template
$routes->get('/admin-invoice-template', 'adminController::viewInvoiceTemplate');
// list
$routes->get('/admin-invoice-list', 'adminController::viewInvoiceList');


// ======= ADMIN ROUTES ENDS ========
// ======= USER ROUTES STARTS ========