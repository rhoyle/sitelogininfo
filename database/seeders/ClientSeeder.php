<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [

            [
                'id'             => 1,
                'name'           =>  'Tod Potgeter ',
                'Contact_number'     =>  '616 813-4598',
                'cell_phone'         =>  '616 813-4598',
                'Text_message'       =>  'Job Site Address 4024 General Bath Dr Nashville TN. ',
                'street_address'     =>  '8853 McCrory Lane ',
                'street_address_line_2'  =>  'NA',
                'city'      =>  'Nashville',
                'state'     =>  'TN',
                'zip_code'  =>  '37221',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],

        ];

        Client::insert($clients);
    }
}
