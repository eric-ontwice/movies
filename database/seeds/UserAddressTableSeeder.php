<?php

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAddress::create([
                    'address'       => 'Av. Revolucion',
                    'number'        => 3,
                    'colony'        => 'EL aguacate',
                    'municipality'  => 'Zitacuaro',
                    'postal_code'   => 61500,
                    'user_id'       => 9,      
        ]);

        UserAddress::create([
                    'address'       => 'Av. Golfo de Mexico',
                    'number'        => 7,
                    'colony'        => 'Los veracruzanos',
                    'municipality'  => 'Xalapa',
                    'postal_code'   => 61500,
                    'user_id'       => 8,      
]);
    }
}
