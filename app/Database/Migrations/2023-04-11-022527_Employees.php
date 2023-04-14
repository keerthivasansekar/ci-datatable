<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Employees extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'emp_fname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_lname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_position' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_office' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_start_date' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_salary' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'emp_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('employees');
    }

    public function down()
    {
        $this->forge->dropTable('employees');
    }
}
