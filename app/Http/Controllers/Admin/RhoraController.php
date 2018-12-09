<?php

namespace App\Http\Controllers\Admin;

use App\Acceso;
use App\Http\Controllers\Controller;
use App\Rhora;
use App\User;
use Illuminate\Http\Request;

class RhoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultad_id = \Session::get('facultad_id');
        $sede_id = \Session::get('sede_id');
        $accesos = Acceso::where('facultad_id', $facultad_id)
                    ->where('sede_id', $sede_id)
                    ->get();
        $users = [];
        foreach ($accesos as $acceso) {
            $user = [
                    'id'=>$acceso->user_id,
                    'wdocente'=>$acceso->wdocente,
                    'rhoras' => $acceso->rhoras
                ];
            array_push($users, $user);
        }

        uasort($users, function ($a, $b)
        {
            if ($a['wdocente'] == $b['wdocente']) {
                return 0;
            }
            return ($a['wdocente'] < $b['wdocente']) ? -1 : 1;
        });
        $perPage = 4;
        $row = 0;
        $rowPage = 0;
        $nPage = 1;
        foreach ($users as $key => $value) {
            $users[$key]['row'] = ++$row;
            $users[$key]['rowPage'] = ++$rowPage;
            $users[$key]['nPage'] = $nPage;
            if($rowPage == $perPage){$rowPage=0; ++$nPage;};
        }

        $pagination = [
                        'total' => $accesos->count(), 
                        'per_page'  => $perPage, 
                        'last_page' => $nPage,
                        'current_page' => 0,
                        'from' => 0,
                        'to' => 0 
                    ];
        return view('admin.rhora.index')
            ->with('data', collect($users))
            ->with('pagination', collect($pagination))
            ->with('facultad_id', $facultad_id)
            ->with('sede_id', $sede_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rhora  $rhora
     * @return \Illuminate\Http\Response
     */
    public function show(rhora $rhora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rhora  $rhora
     * @return \Illuminate\Http\Response
     */
    public function edit(rhora $rhora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rhora  $rhora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rhora $rhora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rhora  $rhora
     * @return \Illuminate\Http\Response
     */
    public function destroy(rhora $rhora)
    {
        //
    }
}
