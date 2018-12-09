<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
    public function index()
    {
        $collect = Curso::where('id','>',0)->paginate(4);

        $data = collect();
        $data->put('current_page',$collect->currentPage());

        $array = collect();
        foreach ($collect as $item) {
            $array->push([
                    'id' => $item->id,
                    'campo1' => $item->cod_curso, 
                    'campo2' => $item->wcurso,
            ]);
        }
        $data->put('data',$array);

        return [
            'data'  =>  $data,            
            'pagination' => [         
                'total'         => $collect->total(), 
                'current_page'  => $collect->currentPage(),   
                'per_page'      => $collect->perPage(),   
                'last_page'     => $collect->lastPage(),  
                'from'          => $collect->firstItem(), 
                'to'            => $collect->lastItem(),  
            ],          
        ];
    }
}