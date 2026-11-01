<?php

namespace Database\Seeders;

use App\Models\SubscriptionStatus;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tabla = 'subscription_status';

        // 1. Averiguamos cual es el ID maximo ACTUAL antes de insertar nada
        $ultimoId = DB::table($tabla)->max('id_status') ?? 0;

        try {
            DB::transaction(function () {
                SubscriptionStatus::create([
                    'description' => 'active',
                    'active' => true
                ]);

                SubscriptionStatus::create([
                    'description' => 'grace_period',
                    'active' => true
                ]);

                SubscriptionStatus::create([
                    'description' => 'cancelled',
                    'active' => true
                ]);

                SubscriptionStatus::create([
                    'description' => 'expired',
                    'active' => true
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
