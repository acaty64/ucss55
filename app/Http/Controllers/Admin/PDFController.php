<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\asset;
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
dd($curso_id);
        $curso = Curso::find($curso_id);
        $filename = $curso->ccurso . '_' . env('SEMESTRE') .'.pdf';
        $cod_facultad = \Session::get('cfacultad');
        // $facu_sede = Session::get('cfacultad').'_'.Session::get('csede');
        // $file_pdf = 'pdf/FCEC_LIM/silabos/'.$filename;
        // $arch_pdf = asset('pdf\\'.$facu_sede.'\\silabos\\').$filename;
        // $arch_pdf = asset('storage\\app\\syllabus\\'.$cod_facultad.'\\').$filename;
        $arch_pdf = storage_path() . DIRECTORY_SEPARATOR . 'app'. DIRECTORY_SEPARATOR . 'syllabus' . DIRECTORY_SEPARATOR . $fileName;
        // if(!file_exists($file_pdf)){
        if(!file_exists($filename)){
            $arch_pdf = storage_path() . DIRECTORY_SEPARATOR . 'app'. DIRECTORY_SEPARATOR . 'syllabus' . DIRECTORY_SEPARATOR . '000000.pdf';
            // $arch_pdf = asset('storage\\app\\syllabus\\000000.pdf');
        }
        $data = [
                'arch_pdf' => $arch_pdf,
                'wcurso' => $curso->wcurso
            ];
        return \PDF::loadView('pdf.syllabus', $data)
                    ->setPaper('a4')
                    ->setOrientation('Portrait')
                    ->setOption('enable-javascript', true)
                    ->setOption('images', true)
                    ->setOption('javascript-delay', 3500)
                    ->setOption('no-stop-slow-scripts', true)
                    ->setOption('enable-smart-shrinking', true)
                    // ->setOption('header-html', $headerHtml)
                    // ->setOption('footer-html', $footerHtml)
                    ->setOption('header-spacing', 5)
                    ->setOption('footer-spacing', 5)
                    ->setOption('margin-top', 40)
                    ->setOption('lowquality', true)
                    ->setOption('margin-bottom', 30);
        // return view('pdf.silabo')
        //     ->with('arch_pdf',$arch_pdf)
        //     ->with('wcurso',$curso->wcurso);
    }

}
