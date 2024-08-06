<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Products_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Products_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '35',
                'null'       => false,
            ],
            'Products_description' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'Products_price' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => false,
            ],
            'Subscriber_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Product_type_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Packing_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Brand_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Unit_measurement_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Product_status_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'Suppliers_fk' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('Products_id', true);

        // Add foreign keys
        $this->forge->addForeignKey('Subscriber_fk', 'subscriber', 'Subscriber_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Product_type_fk', 'product_type', 'Product_type_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Packing_fk', 'packing', 'Packing_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Brand_fk', 'brand', 'Brand_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Unit_measurement_fk', 'unit_measurement', 'Unit_measurement_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Product_status_fk', 'product_status', 'Product_status_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Suppliers_fk', 'suppliers', 'Suppliers_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
