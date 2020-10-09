<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /**
    * Users
    */
        User::create([
            'name'      => "Eric",
            'lastname'  => "Montes de Oca Juárez",
            'email'     => "eric.montes@grupoontwice.com",
            'password'  => bcrypt('Ontwice2020')
        ]);

        User::create([
            'name'      => "Nuevo",
            'lastname'  => "Usuario",
            'email'     => "eric.montes2@grupoontwice.com",
            'password'  => bcrypt('Ontwice2020')
        ]);

        User::create([
            'name'      => "yahave",
            'lastname'  => "Mondragon",
            'email'     => "yahave.mondragon@grupoontwice.com",
            'password'  => bcrypt('1234567890')
        ]);
    /**
     * ADMINS
     */
        User::create([
            'name'      => "Eric",
            'lastname'  => "Admin",
            'email'     => "eric@admin.com",
            'password'  => bcrypt('Ontwice2020#Admin'),
            'role_id'   => 2
        ]);

        User::create([
            'name'      => "Yahave",
            'lastname'  => "Admin",
            'email'     => "yahave48@gmail.com",
            'password'  => bcrypt('1234567890'),
            'role_id'   => 2
        ]);
    }
}
