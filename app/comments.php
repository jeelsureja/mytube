<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'id', 'vid', 'u_id', 'comment',
    ];
}
