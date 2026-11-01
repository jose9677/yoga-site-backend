<?php

namespace Database\Seeders;

use App\Models\RolAction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        $this->call(RolesSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(ActionSeeder::class);
        $this->call(RolActionSeeder::class);
        $this->call(DocsTypeSeeder::class);
        $this->call(SubscriptionStatusSeeder::class);
    }
}
