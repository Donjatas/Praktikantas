<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VartotojasStudentas;

class VartotojasStudentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing data
        VartotojasStudentas::truncate();

        // Seed the collection with sample data
        VartotojasStudentas::create([
            'vardas' => 'John',
            'pavarde' => 'Doe',
            'el_pastas' => 'john.doe@example.com',
            'slaptazodis' => bcrypt('password'),
            'telefono_numeris' => '123456789',
            'aukstoji_mokykla' => 'University of Example',
            'fakultetas' => 'Computer Science',
            'specialybe' => 'Software Engineering',
            'kursas' => 3,
            'miestas' => 'Example City',
        ]);

        // Add more sample data as needed
    }
}
