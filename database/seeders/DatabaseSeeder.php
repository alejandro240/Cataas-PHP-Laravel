<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Primero si quieres los usuarios de prueba
        \App\Models\User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Ahora llamamos a nuestro seeder de gatos
        $this->call(CatImageSeeder::class);
    }
}
