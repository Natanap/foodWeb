<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => 'Lucio Antonio de Souza',
            'email' => 'admin@admin.com',
            'telefone' => '34 - 9999-9999 '
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            'nome' => 'Natan de Souza',
            'email' => 'natan@lindo.com',
            'telefone' => '34 - 9999-9778 '
        ];

        $usuarioModel->protect(false)->insert($usuario);

        dd($usuarioModel->errors());
    }
}
