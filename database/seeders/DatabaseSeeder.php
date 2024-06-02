<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       User::factory()->create([
        'email' => 'admin@mail.com',
        'password' => bcrypt('qwerty')
       ]);

       Note::factory(30)->create();
    }
}