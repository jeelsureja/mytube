<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'u_id', 'message',
    ];
}
