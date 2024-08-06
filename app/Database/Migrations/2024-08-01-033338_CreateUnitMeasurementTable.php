<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUnitMeasurementTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Unit_measurement_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Unit_measurement_name' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ],
            'Unit_measurement_code' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ],
            'Unit_measurement_description' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
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

        $this->forge->addKey('Unit_measurement_id', true);
        $this->forge->addUniqueKey('Unit_measurement_name');
        $this->forge->addUniqueKey('Unit_measurement_code');
        $this->forge->createTable('unit_measurement');
    }

    public function down()
    {
        $this->forge->dropTable('unit_measurement');
    }
}
