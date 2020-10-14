<?php

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create(['name'=>'BBVA Bancomer']);
        Bank::create(['name'=>'Banorte']);
        Bank::create(['name'=>'Banamex']);
        Bank::create(['name'=>'Santander']);
        Bank::create(['name'=>'Scotiabank']);
        Bank::create(['name'=>'HSBC']);
        Bank::create(['name'=>'Inbursa']);
        Bank::create(['name'=>'Banco del Bajio']);
        Bank::create(['name'=>'Scotiabank']);
        Bank::create(['name'=>'Banco Azteca']);
    }
}
