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
    public function store(Request $request)
    {
        $type = $request->type;
        $datos = $request->data;
        MenuType::where('type_id', $type)->each(function($m){ $m->delete(); });
        // $all = MenuType::where('type_id', $type)->get();
        // $all->each()->delete();
// return $request;

        foreach ($datos as $key => $value) {
            // type_id, menu_id, level, order
            $item = $datos[$key];
            MenuType::create([
                    'type_id' => $type,
                    'menu_id' => $item['menu_id'],
                    'level' => $item['level'],
                    'order' => $item['order']
                ]);
            if(array_key_exists('data', $item)){
                // return ['success' => array_key_exists('data', $item),
                        // 'datos'=> $item];
            // }else{
                foreach ($item['data'] as $key => $value) {
                    $item2 = $item['data'][$key];
                    MenuType::create([
                            'type_id' => $type,
                            'menu_id' => $item2['menu_id'],
                            'level' => $item2['level'],
                            'order' => $item2['order']
                        ]);                    
                }
            }
        }
        return ['success' => true];
    }
}
