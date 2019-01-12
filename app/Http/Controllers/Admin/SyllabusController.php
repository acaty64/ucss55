<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
// use Symfony\Component\HttpFoundation\File\UploadedFile;

class SyllabusController extends Controller
{
    public function upload(Request $request)
    {
    	return view('syllabus.upload');
    }

    public function save(Request $request)
    {
    	foreach ($request['files'] as $key => $file) {
    		$name_file =  $file->getClientOriginalName();
    		$file_out = storage_path('syllabus') . '/' . $name_file;
    		move_uploaded_file($file->getRealPath(), $file_out);
    	}
    	Flash::success(count($request['files']) . ' archivos cargados de la carpeta ' . $request['carpeta'])->important();
		return back();
    }

}