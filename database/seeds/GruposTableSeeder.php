<?php
use App\Grupo;
use Illuminate\Database\Seeder;
class GruposTableSeeder extends Seeder
{
    public function run()
    {
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'EG_',
	            'wgrupo' => 'ESTUDIOS GENERALES',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'MAT',
	            'wgrupo' => 'MATEMATICAS',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'EST',
	            'wgrupo' => 'ESTADISTICAS',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'DER',
	            'wgrupo' => 'DERECHO',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'ADM',
	            'wgrupo' => 'ADMINISTRACION',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'MKT',
	            'wgrupo' => 'MARKETING',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'OPE',
	            'wgrupo' => 'OPERACIONES',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'GES',
	            'wgrupo' => 'GESTION',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'FIN',
	            'wgrupo' => 'FINANZAS',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'CGE',
	            'wgrupo' => 'CONTABILIDAD GENERAL',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'CSU',
	            'wgrupo' => 'CONTABILIDAD SUPERIOR',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'CAP',
	            'wgrupo' => 'CONTABILIDAD APLICADA',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'MAC',
	            'wgrupo' => 'MACROECONOMIA',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'MIC',
	            'wgrupo' => 'MICROECONOMIA',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'INV',
	            'wgrupo' => 'INVESTIGACION',
		]);
        Grupo::create([
	            'facultad_id' => 1,
	            'sede_id' => 1,
	            'cod_grupo' => 'IDI',
	            'wgrupo' => 'IDIOMAS',
		]);
    }
}
