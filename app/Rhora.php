<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rhora extends Model
{
	protected $fillable = [
	        'facultad_id', 'sede_id', 'user_id', 'rhoras' 
	    ];
}
