<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductStatusTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Product_status_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'Product_status_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'Product_status_description' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('Product_status_id', true); // Definir como clave primaria

        $this->forge->createTable('product_status');
    }

    public function down()
    {
        $this->forge->dropTable('product_status');
    }
}
