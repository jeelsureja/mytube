<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
 
    protected $table = 'sample_data';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'category_id','u_id','video_name', 'video_des', 'image','video'
    ];
}
