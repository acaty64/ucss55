@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edición de Menú</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>campo</th>
                            <th>id</th>
                            <th>contenido</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>id</td>
                                <td>{{ $items->menu_id }}</td>
                            </tr>
                            <tr>
                                <td>type_id</td>
                                <td>{{ $items->type_id }}</td>
                                <td>{{ $items->type->name }}</td>
                            </tr>
                            <tr>
                                <td>menu_id</td>
                                <td>{{ $items->menu_id }}</td>
                                <td>{{ $items->menu->name }}</td>
                            </tr>
                            <tr>
                                <td>Ruta</td>
                                <td>{{ $items->menu_href }}</td>  
                            </tr>
                            <tr>
                                <td>level</td>
                                <td>{{ $items->level }}</td>
                            </tr>
                            <tr>
                                <td>order</td>
                                <td>{{ $items->order }}</td>
                            </tr>
                            <tr>
                                <td>help</td>
                                <td>{{ $items->help }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('view','type_menu.edit.blade.php')
