@extends('layouts.app')

@section('title', 'Nuevo proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/proyecto" method="POST">
      @csrf
      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
      </div>
      <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
        </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
