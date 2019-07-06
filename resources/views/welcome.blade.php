@extends('plantilla')

@section('seccion')
<h1 class="display-4">Notas</h1>

@if (session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
@endif

  <form action="{{ route('notas.crear') }}" method="POST">
    @csrf

    @error('nombre')
    <div class="alert alert-danger" role="alert">
     El nombre es obligatorio
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @enderror @if ($errors->has('descripcion'))
    <div class="alert alert-danger" role="alert">
      La descripción es obligatoria
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <input type="text" name="nombre" placeholder="Nombre"class="form-control mb-2" 
    value="{{ old('nombre') }}">
    <input type="text" name="descripcion" placeholder="Descripcion"class="form-control mb-2" 
    value="{{ old('descripcion') }}">
    <button type="submit" class="btn btn-primary btn-block">Agregar</button>
  </form>


<table class="table my-4">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($notas as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        <td>
       <a href="{{ route('notas.detalle', $item) }}"> 
            {{$item->nombre}}
          </a> 
        </td>
        <td>{{$item->descripcion}}</td>
            <td>
            <a href="{{ route('notas.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{ $notas->links() }}

@endsection
        