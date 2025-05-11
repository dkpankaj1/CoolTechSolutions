<?php

namespace App\Models;

use App\Enums\StatusEnum;
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
        'status',
    ];

}
