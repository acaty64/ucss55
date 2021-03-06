<?php

use App\Acceso;
use App\DataUser;
use App\Facultad;
use App\Sede;
use App\Type;
use App\User;
use Illuminate\Database\Seeder;

class AccesosTableSeederNew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = 1; // MASTER
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 1,
            ]);
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 2,
            'type_id' => 1,
            ]);
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 3,
            'type_id' => 1,
            ]);
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 4,
            'type_id' => 1,
            ]);

        $user_id = 2; // ADMINISTRADOR
        $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 5,
            ]);

        $all = User::where('id','>',2)->get();
        foreach ($all as $item) {
            $user_id = $item->id;
            Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 3,

            ]);
         } 

    }
}
