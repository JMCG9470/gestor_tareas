@extends('layouts.app')

@section('title', 'Ver Tarea')

@section('content')
    <h1>Tarea ID {{ $tarea->id }}</h1>
    <p><b>Título: </b>{{ $tarea->titulo }}</p>
    <p><b>Descripción: </b>{{ $tarea->descripcion }}</p>
    <p><b>Creado: </b>{{ $tarea->created_at }}</p>
    <p><b>Modificado: </b>{{ $tarea->updated_at }}</p>
    <div class="btn-group" role="group" aria-label="Basic example">
        <form action="/tarea/{{ $tarea->id }}" method="POST">
            @csrf
            @method('delete')
            <a href="../tarea" class="btn btn-primary">Lista de Tareas</a>
            <a href="../tarea/{{ $tarea->id }}/edit" class="btn btn-primary">Editar Tarea</a>
            <button type="submit" class="btn btn-danger">Eliminar Tarea</button>
        </form>
    </div>
@endsection
