<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
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
            'nome' => [
                'type'       => 'varchar',
                'constraint' => '50',
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => '50',
            ],
            'telefone' => [
                'type'       => 'varchar',
                'constraint' => '50',
            ],
        ]); 
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
