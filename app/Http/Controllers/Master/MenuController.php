<?php

namespace App\Http\Controllers\Master;

use App\Acceso;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuType;
use App\Type;
use Faker\Provider\slug;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::paginate(6);
        return view('menu/index')
            ->with('menus',$menus);            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('menu/create')
            ->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->href = $request->href;
        $menu->save();

        // $menu_id = Menu::all()->last()->id;
        // $level = $request->level;
        // $order = $request->order;

        // foreach ($request->all() as $xtype => $value) {
        //     if(substr(trim($xtype),0,4) =='type'){
        //         $menu_type = new MenuType;
        //         $menu_type->type_id = substr(trim($xtype),4,3);
        //         $menu_type->menu_id = $menu_id;
        //         $menu_type->level = $level;
        //         $menu_type->order = $order;
        //         $menu_type->save();
        //     }
        // }

        return redirect()->route('master.menu.index');
        
    }

    /**
     * Display the tree's data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Menu::find($id);

        return view('menu/edit')
            ->with('items', $items);
        //$menu = Menu::find($id);
//         $var = array();
//         $menuTypes = MenuType::where('menu_id', $id)->get();
//         foreach ($menuTypes as $menuType) {
//             $id = $menuType->id;
//             $var['id'] = $menuType->id;
//             $menu_name = Menu::find($menuType->menu_id)->name;
//             $menu_href = Menu::find($menuType->menu_id)->href;
//             $type_name = Type::find($menuType->type_id)->name;
//             $var['menu_id'] = $menuType->menu_id;
//             $var['type_id'] = $menuType->type_id;
//             $var['menu_name'] = $menu_name;
//             $var['menu_href'] = $menu_href;
//             $var['type_name'] = $type_name;
//             $var['level'] = $menuType->level;
//             $var['order'] = $menuType->order;
//         }
//         $menus = collect($var);

            //->with('types',$types);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $menu = Menu::findOrFail($request->id);
        $menu->fill([
                'name' => $request->name,
                'href' => $request->href,
                'sw_auth' => $request->sw_auth,
                'parameter' => $request->parameter,
                'help' => $request->help
            ]);
        $menu->save();
        Flash::success('Menu modificado.');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('MenuController@destroy');
    }

}

