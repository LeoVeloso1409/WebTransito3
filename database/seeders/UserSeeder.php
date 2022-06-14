<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'LEONARDO VELOSO NEVES',
            'matricula' => '1445147',
            'email' => 'leonardo@email.com',
            'orgao' => 'PMMG',
            'unidade' => '55 BPM',
            'funcao' => 'ADMIN',
            'password' => Hash::make('password'),
        ]);
    }
}
