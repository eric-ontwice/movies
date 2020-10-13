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
            'birthdate' => "1994-02-25",
            'password'  => bcrypt('Ontwice2020')
        ]);

        User::create([
            'name'      => "Mario",
            'lastname'  => "Usuario",
            'email'     => "mario.sanchez@grupoontwice.com",
            'birthdate' => "1998-09-10",
            'password'  => bcrypt('Ontwice2020')
        ]);

        User::create([
            'name'      => "yahave",
            'lastname'  => "Mondragon",
            'email'     => "yahave.mondragon@grupoontwice.com",
            'birthdate' => "1998-01-03",
            'password'  => bcrypt('1234567890')
        ]);
       /*    
         “AA”    Películas con  atractivo infantil, para niños menores de siete años de edad.
         “A”    Películas para todo público.         
>=12     “B”    Películas para adolescentes de 12 años en adelante.         
>=16     “B15”  Película no recomendable para menores de 15 años de edad.         
>=18     “C”    Películas para adultos de 18 años en adelante.         
>=18     “D”    Películas para adultos, con sexo explícito, lenguaje procaz o alto grado de violencia.
        */
        //Niños de 7 años
        User::create([
            'name'      => "user2013",
            'lastname'  => "User",
            'email'     => "user2013@gmail.com",
            'birthdate' => "2013-01-01",
            'password'  => bcrypt('user2013'),            
        ]);
        //Adolecente de 12 años
        User::create([
            'name'      => "user2008",
            'lastname'  => "User",
            'email'     => "user2008@gmail.com",
            'birthdate' => "2008-01-01",
            'password'  => bcrypt('user2008'),            
        ]);
        //Adolecente de 16 años
        User::create([
            'name'      => "user2004",
            'lastname'  => "User",
            'email'     => "user2004@gmail.com",
            'birthdate' => "2004-01-01",
            'password'  => bcrypt('user2004'),            
        ]);
        //Adulto de 18 años
        User::create([
            'name'      => "user2002",
            'lastname'  => "User",
            'email'     => "user2002@gmail.com",
            'birthdate' => "2002-01-01",
            'password'  => bcrypt('user2002'),            
        ]);

    /**
     * ADMINS
     */
        User::create([
            'name'      => "Eric",
            'lastname'  => "Admin",
            'email'     => "eric@admin.com",
            'birthdate' => "1994-02-25",
            'password'  => bcrypt('Ontwice2020#Admin'),
            'role_id'   => 2
        ]);

        User::create([
            'name'      => "YahaveAdmin",
            'lastname'  => "Admin",
            'email'     => "yahave48@gmail.com",
            'birthdate' => "1998-01-03",
            'password'  => bcrypt('1234567890'),
            'role_id'   => 2
        ]);

    }
}
