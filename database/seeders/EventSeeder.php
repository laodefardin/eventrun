<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Generate some dummy data for the events table
         DB::table('events')->insert([
            [
                'name' => 'Fun Run 5K',
                'slug' => 'fun-run-5k',
                'description' => 'A fun and exciting 5K run event for all ages.',
                'date' => '2024-09-15',
                'location' => 'City Park',
                'categori' => '5K',
                'topik' => 'Fitness and Fun',
                'price' => 150000,
                'img' => 'unsplash-photo-1.jpg',
            ],
            [
                'name' => 'Marathon Challenge',
                'slug' => 'marathon-challenge',
                'description' => 'Join the marathon challenge and test your endurance.',
                'date' => '2024-10-05',
                'location' => 'Downtown',
                'categori' => 'Marathon',
                'topik' => 'Endurance and Speed',
                'price' => 300000,
                'img' => 'unsplash-photo-2.jpg',
            ],
            [
                'name' => 'Kids Fun Run',
                'slug' => 'kids-fun-run',
                'description' => 'A special 1K run event just for kids.',
                'date' => '2024-12-01',
                'location' => 'Local School Field',
                'categori' => 'Kids',
                'topik' => 'Fun and Games',
                'price' => 100000,
                'img' => 'unsplash-photo-3.jpg',
            ],
        ]);
    }
}
