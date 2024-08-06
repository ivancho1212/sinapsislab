<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTypeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Product_type_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'Product_type_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'Product_type_description' => [
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

        $this->forge->addKey('Product_type_id', true); // Definir como clave primaria

        $this->forge->createTable('product_type');
    }

    public function down()
    {
        $this->forge->dropTable('product_type');
    }
}
