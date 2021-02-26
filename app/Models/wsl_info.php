<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wsl_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'user_name',
        'users_email',
        'url',
        'password',
        'contact_person',
        'account_number',
        'miscellaneous',
        'site_pin',
        'security_question_1',
        'security_answer_1',
        'security_question_2',
        'security_answer_2',
        'security_question_3',
        'security_answer_3',
    ];

}
