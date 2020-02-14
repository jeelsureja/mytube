<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
 
    protected $table = 'sample_data';
    protected $fillable = [
    	'first_name', 'last_name', 'image','video'
    ];
}
