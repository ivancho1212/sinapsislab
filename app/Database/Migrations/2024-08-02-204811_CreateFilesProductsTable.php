<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilesProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Files_products_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Files_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'Products_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('Files_products_id', true);
        $this->forge->addForeignKey('Files_id', 'files', 'Files_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('Products_id', 'products', 'Products_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('files_products');
    }

    public function down()
    {
        $this->forge->dropTable('files_products');
    }
}
