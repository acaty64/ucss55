<?php

namespace App;

use App\Type;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menus';

    protected $fillable = [
        'name', 'href', 'sw_auth', 'parameter', 'help'
        // 'name', 'level', 'order', 'route', 'parameter'
    ];

	public function menutype(){
        return $this->belongsTo(MenuType::class, 'menu_id');
    }

    // public function types(){
    //     return $this->belongsToMany(Type::class)
    //     	->withPivot('level', 'order');
    // }

}
