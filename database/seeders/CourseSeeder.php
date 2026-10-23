<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'Introduction to Yoga',
            'description' => 'A beginner-friendly course that introduces the fundamentals of yoga, including basic poses, breathing techniques, and mindfulness practices.',
            'email' => 'prueba3@gmail.com',
            'active' => true,
        ]);

    }
}
