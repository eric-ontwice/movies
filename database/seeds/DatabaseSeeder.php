<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(BankTableSeeder::class);
        $this->call(UserPaymentTableSeeder::class);
        $this->call(UserAddressTableSeeder::class);        
    }
}
