<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_number',
        'cell_phone',
        'text_message',
        'street_address',
        'street_address_line_2',
        'city',
        'state',
        'zip_code',
    ];

}
