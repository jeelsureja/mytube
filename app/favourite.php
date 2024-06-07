<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favourite extends Model
{
    protected $table = 'favouritevideo';

    protected $fillable = [
        'id', 'u_id',
    ];
}
