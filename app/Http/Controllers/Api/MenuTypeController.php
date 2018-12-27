<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuType;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MenuTypeController extends Controller
{
    public function edit()
    {
        $types = Type::all();
        foreach ($types as $type) {
            $type['checked'] = false;
        }

        $menus = Menu::all();
        foreach ($menus as $menu) {
            $menu['checked'] = false;
        }

        $menutypes = MenuType::all();

        return [
            'types'      =>  $types,            
            'menus'      =>  $menus,            
            'menutypes'  =>  $menutypes,
        ];
    }
}
