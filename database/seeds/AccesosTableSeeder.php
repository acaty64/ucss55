<?php

use App\Acceso;
use App\DataUser;
use App\Facultad;
use App\Sede;
use App\Type;
use App\User;
use Illuminate\Database\Seeder;

class AccesosTableSeeder extends Seeder
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

        $user_id = 2; // ADMINISTRADOR
        $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 5,
//            'wdocente' => $wdocente,
            ]);

        $user_id = 3; // RESPONSABLE
        $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 4,
            ]);

        $user_id = 4; // DOCENTE
        $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 3,
            ]);

        $user_id = 5; // CONSULTA
        $wdocente = DataUser::where('user_id',$user_id)->first()->wdocente();
        Acceso::create([
            'user_id' => $user_id,
            'facultad_id' => 1, 
            'sede_id' => 1,
            'type_id' => 2,
            ]);


        $users = User::where('id','>',5)->get(); // RANDOM
        foreach ($users as $user) {
            $user_id = $user->id;
            $facultad_id = 1;
            // $facultad_id = Facultad::all()->random()->id;
            $sede_id = 1;
            // $sede_id = Sede::all()->random()->id;
            $type_id = 3;
            // $type_id = Type::all()->random()->id;
            Acceso::create([
               'user_id' => $user_id,
               'facultad_id' => $facultad_id, 
               'sede_id' => $sede_id,
               'type_id' => $type_id,
                ]);
        }

        // /* User 7: para tests*/
        // $user = User::find(7);
        // $user->facultad_id = 1;
        // $user->sede_id = 1;
        // $user->save;

    }
}
