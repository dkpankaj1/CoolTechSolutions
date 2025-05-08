<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'name',
        'number',
        'email',
        'service',
        'address',
        'description',
    ];
}
