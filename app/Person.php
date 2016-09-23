<?php

namespace Kontak;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'address',
    ];
}
