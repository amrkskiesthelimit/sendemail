<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Dumandan',
                'first_name' => 'John Mark ',
                'middle_name' => 'Majomot',
                'address' => 'Sitio Centro Mandaug Calape, Bohol',
                'birth_date' => '1999-11-17',
                'phone_number' => '09759108302',
                'email' => 'amrkjohn123@gmail.com',
                'initial_deposit' => '1000',
            ],

        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
