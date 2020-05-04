<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //peran
        Role::create([
            'name' => 'admin',
            'display_name' => 'administrator'
        ]);
        Role::create([
            'name' => 'siswa',
            'display_name' => 'Peserta Didik'
        ]);
        User::create([
            'name' => 'Teguh Firmansyah',
            'email' => 'teguh.form@gmail.com',
            'password' => bcrypt('rahasia'),
        ])->attachRole('admin');
        User::create([
            'name' => 'Programmer',
            'email' => 'programmer.smkn7ptk@gmail.com',
            'password' => bcrypt('rahasiakita'),
        ])->attachRole('admin');
    }
}
