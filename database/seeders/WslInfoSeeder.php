<?php

namespace Database\Seeders;

use App\Models\wsl_info;
use Illuminate\Database\Seeder;

class WslInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wsl_infos = [
            [
                'id'             => 1,
                'url'           =>  'https://account.apps.progressive.com/access/login?cntgrp=A',
                'site_name'     => 'Progressive Ins',
                'user_name'     =>  'R+L+M$Hoyle',
                'users_email'   =>  'rhoyle@comcast.net',
                'password'      =>  'Ra64+Ld57+Ma35@Progressive20',
                'contact_person'              =>  'any',
                'account_number'              =>  'Auto 939058177',
                'miscellaneous'               =>  'NA',
                'site_pin'                    =>  'NA',
                'security_question_1'         =>  'What is your mothers maiden name?',
                'security_answer_1'           =>  'Wickersheim',
                'security_question_2'         =>  'What city wher you born in?',
                'security_answer_2'           =>  'Libertyville',
                'security_question_3'         =>  'NA',
                'security_answer_3'           =>  'NA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],

        ];

        wsl_info::insert($wsl_infos);

    }
}
