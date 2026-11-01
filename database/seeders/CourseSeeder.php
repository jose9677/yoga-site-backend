<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tabla = 'courses';

        // 1. Averiguamos cual es el ID maximo ACTUAL antes de insertar nada
        $ultimoId = DB::table($tabla)->max('id_course') ?? 0;

        try {
            DB::transaction(function () {

            $user = User::create([
                'email' => 'yogaadmin@gmail.com',
                'password' => bcrypt('Crisis+96.'),
                'p_a' => 'Admin',
                's_a' => 'User',
                'p_n' => 'Yoga',
                's_n' => 'Admin',
                'id_rol' => 1, // Asignamos el rol de Administrador
                'active' => true,
                'email_active' => true,
            ]);

            $email = $user->email;//PUEDE LLEGAR A FALLAR...

                Course::create([
                'title' => 'Introduction to Yoga',
                'description' => 'A beginner-friendly course that introduces the fundamentals of yoga, including basic poses, breathing techniques, and mindfulness practices.',
                'email' => $email,
                'active' => true,
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
