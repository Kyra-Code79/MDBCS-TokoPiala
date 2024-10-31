<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MdbcsTokoPiala extends Migration
{
    public function up()
    {
        // tbl_barangmasuk
        $this->forge->addField([
            'barangmasuk_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_masuk' => [
                'type' => 'DATE',
            ],
            'supplier_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('barangmasuk_id', true);
        $this->forge->createTable('tbl_barangmasuk');

        // tbl_barangmasuk_detail
        $this->forge->addField([
            'barangmasuk_detail_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'barangmasuk_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'produk_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'harga_satuan' => [
                'type' => 'FLOAT',
            ],
        ]);
        $this->forge->addKey('barangmasuk_detail_id', true);
        $this->forge->createTable('tbl_barangmasuk_detail');

        // tbl_kategori
        $this->forge->addField([
            'kategori_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('kategori_id', true);
        $this->forge->createTable('tbl_kategori');

        // tbl_penjualan
        $this->forge->addField([
            'penjualan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_penjualan' => [
                'type' => 'DATE',
            ],
            'pelanggan_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('penjualan_id', true);
        $this->forge->createTable('tbl_penjualan');

        // tbl_penjualan_detail
        $this->forge->addField([
            'penjualan_detail_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'penjualan_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'produk_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'jumlah' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'harga_satuan' => [
                'type' => 'FLOAT',
            ],
        ]);
        $this->forge->addKey('penjualan_detail_id', true);
        $this->forge->createTable('tbl_penjualan_detail');

        // tbl_produk
        $this->forge->addField([
            'produk_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'deskripsi_produk' => [
                'type' => 'TEXT',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'kategori_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'image' => [
                'type' => 'BLOB',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('produk_id', true);
        $this->forge->createTable('tbl_produk');

        // tbl_supplier
        $this->forge->addField([
            'supplier_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_supplier' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'telepon' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('supplier_id', true);
        $this->forge->createTable('tbl_supplier');

        // tbl_user
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'telepon' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'image' => [
                'type' => 'LONGBLOB',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('tbl_user');

        // tbl_status
        $this->forge->addField([
            'status_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_status' => [
                'type'          => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);
        $this->forge->addKey('status_id', true);
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_barangmasuk');
        $this->forge->dropTable('tbl_barangmasuk_detail');
        $this->forge->dropTable('tbl_kategori');
        $this->forge->dropTable('tbl_penjualan');
        $this->forge->dropTable('tbl_penjualan_detail');
        $this->forge->dropTable('tbl_produk');
        $this->forge->dropTable('tbl_supplier');
        $this->forge->dropTable('tbl_user');
    }
}
