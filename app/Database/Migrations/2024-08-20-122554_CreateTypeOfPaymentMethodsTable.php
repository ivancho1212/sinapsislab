<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTypeOfPaymentMethodsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Type_of_payment_methods_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Type_of_payment_methods_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'Type_of_payment_methods_phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
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

        $this->forge->addKey('Type_of_payment_methods_id', true);
        $this->forge->createTable('type_of_payment_methods');
    }

    public function down()
    {
        $this->forge->dropTable('type_of_payment_methods');
    }
}
