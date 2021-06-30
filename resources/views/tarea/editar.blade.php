@extends('layouts.app')

@section('title', 'Nueva Tarea')

@section('content')
    <h1>Editar tarea con ID {{ $tarea->id }}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/tarea/{{ $tarea->id }}" method="POST">
      @csrf
      @method('put')
      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $tarea->titulo) }}">
      </div>
      <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $tarea->descripcion) }}">
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
