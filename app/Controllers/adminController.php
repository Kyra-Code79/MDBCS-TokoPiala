<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\ProductModel;
use App\Models\statusModel;
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
        return view('admin/product-detail', ['kategoriList' => $kategoriList]);
    }
    public function addProduct()
    {
        $productModel = new ProductModel();

        // Get form data
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi_produk' => $this->request->getPost('product_Description'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'status' => $this->request->getPost('status_id'),  // This will be 1 or 0
        ];

        // Map the numeric status to its human-readable form
        $statusMapping = [
            1 => 'Available',  // Map 1 to "Available"
            0 => 'Not Available', // Map 0 to "Not Available"
        ];

        // Check if the status is valid and map it
        if (isset($statusMapping[$data['status']])) {
            $data['status'] = $statusMapping[$data['status']];
        } else {
            return redirect()->back()->with('error', 'Invalid status value.');
        }

        // Check if required fields are present
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return redirect()->back()->with('error', ucfirst(str_replace('_', ' ', $key)) . ' is required.');
            }
        }

        // Handle image upload (store it as BLOB in the database)
        $image = $this->request->getFile('image');

        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Debug: Check MIME type before storing the image
            $mimeType = $image->getClientMimeType();
            if (strpos($mimeType, 'image') === false) {
                return redirect()->back()->with('error', 'Uploaded file is not a valid image.');
            }

            // Read the image content as binary data
            $imageData = file_get_contents($image->getTempName());

            // Store the image data in the 'image' field as BLOB
            $data['image'] = $imageData;
        } else {
            return redirect()->back()->with('error', 'Image upload failed: ' . $image->getErrorString());
        }

        // Save the product data to the database
        if ($productModel->save($data)) {
            return redirect()->to('/admin-product-detail')->with('message', 'insert_data_success');
        } else {
            return redirect()->back()->with('error', 'Failed to save product data.');
        }
    }


    public function updateProduct($id)
    {
        log_message('info', 'Updating product with ID: ' . $id); // Log the ID
        $productModel = new ProductModel();

        // Retrieve the existing product to ensure it exists
        $product = $productModel->find($id);
        if (!$product) {
            log_message('error', 'Product not found with ID: ' . $id); // Log error if product not found
            return redirect()->to('/admin-product-detail?message=product_not_found');
        }

        // Get form data
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi_produk' => $this->request->getPost('desc_produk'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'status' => $this->request->getPost('status_id'),
        ];

        // Handle image update if a new file is uploaded
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $data['image'] = file_get_contents($image->getRealPath());
        }
        // foreach ($data as $results) {
        //     echo $results;
        //     echo "<br>";
        // }
        // exit();
        // Update the product data
        if ($productModel->update($id, $data)) {
            return redirect()->to('/admin-product-detail?message=update_data_success');
        } else {
            return redirect()->to('/admin-product-detail?message=update_data_failed');
        }
    }

    public function deleteProduct($id)
    {
        $productModel = new ProductModel();

        // Check if the product exists
        $product = $productModel->find($id);
        if (!$product) {
            return redirect()->to('/admin-product-detail?message=product_not_found');
        }

        // Attempt to delete the product
        if ($productModel->delete($id)) {
            return redirect()->to('/admin-product-detail?message=delete_success');
        } else {
            return redirect()->to('/admin-product-detail?message=delete_failed');
        }
    }


    public function productList()
    {
        $productModel = new ProductModel();
        $kategoriModel = new KategoriModel();
        $statusModel = new statusModel();

        $data['products'] = $productModel->findAll();

        // Encode images to Base64
        foreach ($data['products'] as &$product) {
            $product['image'] = base64_encode($product['image']);
        }

        $data['kategoriList'] = $kategoriModel->findAll();
        $data['statusList'] = $statusModel->findAll();
        return view('admin/product-detail', $data);
    }
    public function kategoriList()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        return view('admin/kategori-detail', $data);
    }
    public function addKategori()
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];
        if ($kategoriModel->save($data)) {
            return redirect()->to('/admin-kategori-detail?message=insert_kategori_success');
        } else {
            return redirect()->to('/admin-kategori-detail?message=insert_kategori_failed');
            foreach ($data as $results) {
                echo $results;
                echo "<br>";
            }
        }
    }
    public function updateKategori($id)
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategoriModel->find($id);
        if (!$kategori) {
?><script>
                console.log('Error', 'Kategori Not Found with ID: '
                    .$id);
            </script><?php
                        log_message('error', 'Kategori not found with ID: ' . $id); // Log error if product not found
                        exit();
                        // return redirect()->to('/admin-kategori-detail?message=kategori_not_found');
                    }
                    // Get form data
                    $data = [
                        'kategori_id' => $this->request->getPost('kategori_id'),
                        'nama_kategori' => $this->request->getPost('nama_kategori'),
                    ];
                    if ($kategoriModel->update($id, $data)) {
                        return redirect()->to('/admin-kategori-detail?message=update_kategori_success');
                    } else {
                        return redirect()->to('/admin-kategori-detail?message=update_kategori_failed');
                    }
                }
                public function deleteKategori($id)
                {
                    $kategoriModel = new KategoriModel();

                    // Check if the product exists
                    $kategori = $kategoriModel->find($id);
                    if (!$kategori) {
                        return redirect()->to('/admin-kategori-detail?message=product_not_found');
                    }

                    // Attempt to delete the product
                    if ($kategoriModel->delete($id)) {
                        return redirect()->to('/admin-kategori-detail?message=delete_success');
                    } else {
                        return redirect()->to('/admin-kategori-detail?message=delete_failed');
                    }
                }


                public function viewInvoiceTemplate()
                {
                    return view('admin/invoice-template');
                }
                public function viewInvoiceList()
                {
                    return view('admin/invoice-list');
                }
            }
