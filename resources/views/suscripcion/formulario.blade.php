@extends('layouts.plantillamaster')

@section('titulo')
    Fomulario de Suscripción
@endsection


<h1>Suscripción</h1>
<form action="{{ action('App\Http\Controllers\SuscribirController@save')}}" method="POST">
    {{ csrf_field() }}
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"><br>


    
    <label for="precio">Correo</label>
    <input type="email" name="email"><br>

    <input type="submit" value="Suscribirse">
</form>
