<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\ProductModel;
use App\Models\userModel;

class adminController extends BaseController
{
    public function AdminProductDetail()
    {
        return view('admin/product-detail');
    }
    public function AdminAddProduct()
    {
        $kategoriModel = new KategoriModel(); // Ensure you have a KategoriModel created to interact with tbl_kategori
        $kategoriList = $kategoriModel->findAll(); // Fetch all categories
        return view('admin/add-product', ['kategoriList' => $kategoriList]);
    }
    public function addProduct()
    {
        $productModel = new ProductModel();

        // Get form data
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori_id' => $this->request->getPost('kategori_id'),
        ];

        // Debug: Check if the file input is received
        if ($this->request->getFile('image') === null) {
            return redirect()->back()->with('error', 'No image file uploaded.');
        }

        // Handle image upload
        $image = $this->request->getFile('image');
        if ($image->isValid()) {
            $data['image'] = file_get_contents($image->getRealPath()); // Store the image as binary data
        } else {
            return redirect()->back()->with('error', 'Image upload failed: ' . $image->getErrorString());
        }


        // Save the product data
        if ($productModel->save($data)) {
            return redirect()->to('/admin-product-detail?message=insert_data_success');
        } else {
            return redirect()->to('/admin-add-product?message=insert_data_failed');
        }
    }
    public function productList()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll(); // Fetch all products

        // Convert the image data to Base64
        foreach ($data['products'] as &$product) {
            $product['image'] = base64_encode($product['image']); // Encode the binary image data
        }

        return view('admin/product-detail', $data); // Replace with your actual view file name
    }
}
