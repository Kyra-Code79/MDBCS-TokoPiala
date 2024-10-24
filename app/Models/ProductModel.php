<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    // Define the table and primary key
    protected $table = 'tbl_produk'; // Adjust this to your actual products table name
    protected $primaryKey = 'produk_id'; // Adjust this to your actual primary key

    // Specify the fields that are allowed to be mass-assigned
    protected $allowedFields = [
        'nama_produk',
        'harga',
        'stok',
        'kategori_id', // Foreign key for categories
        'image', // Field for storing product images
    ];

    // Optional: Set validation rules if needed
    protected $validationRules = [
        'nama_produk' => 'required|min_length[3]',
        'harga' => 'required|numeric',
        'stok' => 'required|integer',
        'kategori_id' => 'required|integer', // Ensure kategori_id is provided
        'image' => 'permit_empty|is_image[image]', // Optional validation for image
    ];

    // Optional: Set error messages
    protected $validationMessages = [
        'nama_produk' => [
            'required' => 'Product name is required.',
            'min_length' => 'Product name must be at least 3 characters long.',
        ],
        'harga' => [
            'required' => 'Price is required.',
            'numeric' => 'Price must be a number.',
        ],
        'stok' => [
            'required' => 'Stock is required.',
            'integer' => 'Stock must be an integer.',
        ],
        'kategori_id' => [
            'required' => 'Category ID is required.',
            'integer' => 'Category ID must be an integer.',
        ],
        'image' => [
            'is_image' => 'Uploaded file must be an image.',
        ],
    ];

    // Retrieve all products
    public function getProducts()
    {
        return $this->findAll(); // Retrieves all products
    }

    // Retrieve a specific product by ID
    public function getProduct($id)
    {
        return $this->find($id); // Retrieves a specific product by ID
    }

    // Delete a specific product by ID
    public function deleteProduct($id)
    {
        return $this->delete($id); // Deletes a specific product by ID
    }

    // Add more methods as necessary
}
