<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\asset;
use Illuminate\Support\Facades\Response;
// use Illuminate\Support\Facades\Session;

class PDFController extends Controller
{
    public function usuario($user_id)
    {
    	$view_user = User::find($user_id)->toArray();
        $datauser = User::find($user_id)->datauser()->get()->toArray();
    	$view = \View::make('pdf.usuario', compact('view_user','datauser'))->render();
    	$pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('usuario');
    }

    public function syllabus($curso_id)
    {
        $curso = Curso::findOrFail($curso_id);

        $fileName = $curso->cod_curso . '_' . env('SEMESTRE') .'.pdf';
        $arch_pdf = storage_path() .  DIRECTORY_SEPARATOR . 'syllabus' . DIRECTORY_SEPARATOR . $fileName;
        if(!file_exists($arch_pdf)){
            $arch_pdf = storage_path() . DIRECTORY_SEPARATOR . 'syllabus' . DIRECTORY_SEPARATOR . '000000.pdf';
        }
        // $data = [
        //         'arch_pdf' => $arch_pdf,
        //         'wcurso' => $curso->wcurso
        //     ];
        return response()->file($arch_pdf);
    }

}
