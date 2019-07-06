@extends('plantilla')

@section('seccion')
    
    <h1>Este es el equipo de trabajo</h1>

    @foreach ($equipo as $miembro)
    <a href="{{ route('nosotros', $miembro) }}" class="h4 text-danger">{{$miembro}}</a><br>
    @endforeach

    @if (!empty($nombre))

        @switch($nombre)
        @case($nombre == 'Luis')
    <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
        <p>{{ $nombre }} Consequat nisi aute in fugiat commodo velit amet quis adipisicing nulla. 
        Do consectetur adipisicing minim dolore esse laboris nulla dolore consequat. 
        In laboris officia quis sint magna incididunt aute voluptate dolor id fugiat mollit consequat. 
        Esse et et commodo incididunt labore velit veniam laborum sint sunt officia ut qui consectetur.</p>    
            @break
        @case($nombre == 'Marvin')
        <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
        <p>{{ $nombre }} Consequat nisi aute in fugiat commodo velit amet quis adipisicing nulla. 
        Do consectetur adipisicing minim dolore esse laboris nulla dolore consequat. 
        In laboris officia quis sint magna incididunt aute voluptate dolor id fugiat mollit consequat. 
        Esse et et commodo incididunt labore velit veniam laborum sint sunt officia ut qui consectetur.</p>
            @break
            @case($nombre == 'Jairo')
        <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
        <p>{{ $nombre }} Consequat nisi aute in fugiat commodo velit amet quis adipisicing nulla. 
        Do consectetur adipisicing minim dolore esse laboris nulla dolore consequat. 
        In laboris officia quis sint magna incididunt aute voluptate dolor id fugiat mollit consequat. 
        Esse et et commodo incididunt labore velit veniam laborum sint sunt officia ut qui consectetur.</p>
            @break
        @default
            
    @endswitch

    @endif

    

@endsection