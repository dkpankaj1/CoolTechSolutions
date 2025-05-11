<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complain extends Model
{
    use SoftDeletes;
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
