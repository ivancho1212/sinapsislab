<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePackingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Packing_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'Packing_name' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'Packing_description' => [
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

        $this->forge->addKey('Packing_id', true); // Definir como clave primaria

        $this->forge->createTable('packing');
    }

    public function down()
    {
        $this->forge->dropTable('packing');
    }
}
