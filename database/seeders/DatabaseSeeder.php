<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pid;
use App\Models\Trust;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\
        Pid::create([
            'pid' => 'SCOTTS (1957-Late 1980’s)',
            'section' => 'FERTILIZER',
            'content' => '<li>22% to 33% Tremolite </li>
                         <li>Thousands of products where “Tremolite” fiber was incorporated into the <br> Vermiculite Scotts used in their products as an additive to their
                         fertilizer.Most of the vermiculite came from Libby, MT (WR Grace) </li>'
        ]);
        // User::create(['name' => 'Sultan', 'email' => 'teepukhan@gmail.com', 'password' => bcrypt('1234')]);
        // User::factory(10)->create();
        Trust::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
