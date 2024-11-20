<?php

namespace App\Controllers;

use App\Models\userModel;
use App\Models\ProductModel;
use App\Models\KategoriModel;

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
        $productModel = new ProductModel();
        $kategoriModel = new KategoriModel();

        // Set up pagination for products
        $perPage = 10;
        $page = $this->request->getVar('page') ?? 1;

        $totalProducts = $productModel->where('status', 'Available')->countAllResults(false);
        $products = $productModel->where('status', 'Available')
            ->orderBy('nama_produk', 'ASC')
            ->paginate($perPage, 'products');

        // Fetch categories
        $categories = $kategoriModel->findAll();

        $data = [
            'products' => $products,
            'pager' => $productModel->pager,
            'currentPage' => $page,
            'perPage' => $perPage,
            'totalProducts' => $totalProducts,
            'showingCount' => count($products),
            'categories' => $categories, // Pass categories to view
        ];

        return view('user/not-login/ecommerce-product-shop', $data);
    }
    public function beforeUserProduct($id)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($id);

        // Check if the product exists
        if (!$product) {
            // Optionally, show a 404 error if the product is not found
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Product with ID $id not found.");
        }

        // Pass the product data to the view
        return view('user/not-login/ecommerce-product-detail', ['product' => $product]);
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
