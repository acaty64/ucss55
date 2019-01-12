@extends('layouts.app')

@section('content')
	<div class="container">
	  <div class="row">
	    <div class="col-md-8 col-md-offset-2">
	      <div class="panel panel-default">
	        <div class="panel-heading"><h3>Carga de syllabus</h3></div>
	        {{-- <div class="panel-body"> --}}
						{{-- <div class="container"> --}}
						  <div class="page-header">
						      <h3>Arrastre y suelte la carpeta a cargar.</h3>
						  </div>
							    
						  <div class="row">
								<form action="/administrador/syllabus/save" method="post" id="form1" enctype="multipart/form-data">
									{{-- {{ csrf_field() }} --}}
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" id="carpeta" name="carpeta" value="">
						    	<div id="fileHolder">
							      <div class="folder-icon"></div>
										<input type="file" multiple webkitdirectory id="fileURL" name="files[]" />
							      </div>
								 
										<div class="row">
											<h4 id="titulo">Archivos a Cargar:</h4>
									 		<ul id="fileOutput"></ul>
										</div>     
							    	<div class="row">
							    		<button id="buttonSave" type="submit" value="Submit" class="view_off">Grabar</button>
						    		</div> 
								</form>
							</div>
						{{-- </div> --}}
	        {{-- </div> --}}
	      </div>
	    </div>
	  </div>
	</div>

@endsection

@section('js')
<script>
	/*
	by Addy Osmani
	based on the original webkitdirectory POC
	by Ryan Seddon
	*/
	var files, 
	    file, 
	    extension, 
	    input = document.getElementById("fileURL"),
	    output = document.getElementById("fileOutput"),
	    holder = document.getElementById("fileHolder");
	    button = document.getElementById("buttonSave");
	    carpeta = document.getElementById("carpeta");
	    titulo = document.getElementById("titulo");

	input.addEventListener("change", function (e) {
	    files = e.target.files;
	    
	    output.innerHTML = "";

	    for (var i = 0, len = files.length; i < len; i++) {
	        file = files[i];
	        extension = file.name.split(".").pop();
	        output.innerHTML += "<li class='type-" + extension + " file'>" + file.name + " (" +  Math.floor(file.size/1024 * 100)/100 + "KB)</li>";
	    }
	        
	    if(files.length==0){
	    	button.setAttribute('class', 'view_off');
	      titulo.innerHTML = '';
	    }else{
				var relativePath = files[0].webkitRelativePath;
	      var name_folder = relativePath.split("/");
	      carpeta.setAttribute('value', name_folder[0]);
	      titulo.innerHTML = 'Archivos a Cargar de la carpeta: ' + name_folder[0];

	    	button.setAttribute('class', 'view_on');
	    }
	}, false);


	// This event is fired as the mouse is moved over an element when a drag is occuring
	input.addEventListener("dragover", function (e) {
	    holder.classList.add("highlightOver");
	});

	// This event is fired when the mouse leaves an element while a drag is occuring
	input.addEventListener("dragleave", function (e) {
	    holder.classList.remove("highlightOver");
	});

	// Fires when the user releases the mouse button while dragging an object.
	input.addEventListener("dragend", function (e) {
	    holder.classList.remove("highlightOver");
	});

	// The drop event is fired on the element where the drop was occured at the end of the drag operation
	input.addEventListener("drop", function (e) {
	    holder.classList.remove("highlightOver");
	});

</script>
@endsection


@section('style')
<style>
	.page-header { text-align: center }
	.view_off { visibility: hidden }
	.view_on { visibility: visible }
	.container { margin:20px}
	.highlightOver { background:url('http://www.prguitarman.com/comics/poptart1red1.gif'); background-position:-20px -90px;}
	.type-png{ background-image:url(http://cdn5.iconfinder.com/data/icons/fatcow/16x16/file_extension_png.png)}
	.type-css { background-image: url(http://cdn5.iconfinder.com/data/icons/FileTypesIcons/16/css.png);}
	.type-js { background-image: url(http://cdn1.iconfinder.com/data/icons/CS5/16/ExtendScript_JSX_file_document.png);}
	.row{ margin:10px}
	input[type="file"] {  width: 600px; height: 300px; margin-top:-240px; background:transparent; }
	#fileHolder{width: 600px; height: 200px; overflow:hidden;}
	.folder-icon{ margin:30px auto; background-image:url('http://cdn5.iconfinder.com/data/icons/Eko_Folders_by_kyo_tux/128/Downloads.png'); height:128px;width:128px;}
	ul { list-style-type:none}

	.file{
	background-image: url(http://cdn1.iconfinder.com/data/icons/CrystalClear/16x16/mimetypes/unknown.png);
	background-repeat: no-repeat;
	padding-left: 1.6em;
	}

</style>

@endsection

@section('view')
View: syllabus/upload.blade.php
@endsection