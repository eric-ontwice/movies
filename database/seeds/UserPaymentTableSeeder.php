<?php

use App\Models\UserPayment;
use Illuminate\Database\Seeder;

class UserPaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPayment::create([                  
            'card_number'       => "1234-4567-8912",
            'expiration_month'  => 12,
            'expiration_year'   => 23,
            'cvv'               => 123,
            'user_id'           => '1',
            'bank_id'           => '1',
        ]);

        UserPayment::create([                  
            'card_number'       => "4567-8912-1234",
            'expiration_month'  => 11,
            'expiration_year'   => 22,
            'cvv'               => 321,
            'user_id'           => '2',
            'bank_id'           => '2',
        ]);

        UserPayment::create([                  
            'card_number'       => "8912-1234-4567",
            'expiration_month'  => 10,
            'expiration_year'   => 21,
            'cvv'               => 213,
            'user_id'           => '3',
            'bank_id'           => '3',
        ]);
    }
}
