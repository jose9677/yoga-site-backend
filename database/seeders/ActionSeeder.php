<?php

namespace Database\Seeders;

use App\Models\Action;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tabla = 'actions';

        // 1. Averiguamos cual es el ID maximo ACTUAL antes de insertar nada
        $ultimoId = DB::table($tabla)->max('id_action') ?? 0;

        try {
            DB::transaction(function () {
                    Action::create([
                    'description' => 'CONSULTAR-USUARIOS',
                    'active' => true,
                    'id_module' => 1,
                    'route' => 'api/auth',
                    'method' => 'GET'
                ]);

                Action::create([
                    'description' => 'CONSULTAR-USUARIO-POR-ID',
                    'active' => true,
                    'id_module' => 1,
                    'route' => 'api/auth/{email}',
                    'method' => 'GET'
                ]);

                Action::create([
                    'description' => 'ACTIVAR-USUARIO',
                    'active' => true,
                    'id_module' => 1,
                    'route' => 'api/auth/active-user/{email}',
                    'method' => 'PUT'
                ]);

                Action::create([
                    'description' => 'DESACTIVAR-USUARIO',
                    'active' => true,
                    'id_module' => 1,
                    'route' => 'api/auth/desactive-user/{email}',
                    'method' => 'PUT'
                ]);
            });
        } catch (Exception $e) {
            // 2. Si da error, calculamos el siguiente ID real basado en lo que ya existia
            $siguienteId = $ultimoId + 1;

            // 3. Forzamos a MySQL a regresar a este numero exacto
            DB::statement("ALTER TABLE {$tabla} AUTO_INCREMENT = {$siguienteId};");
            
            // Lanzamos el error original para que veas que fallo en la consola
            throw $e;
        }
    }
}
