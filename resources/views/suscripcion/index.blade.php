@extends('layouts.plantillamaster')

@section('titulo')
    Fomulario de Suscripción
@endsection


<h1>Suscriptores</h1>
<ul>
    @foreach($suscriptores as $suscriptor)
        <li>
            Nombre: {{$suscriptor->nombre}} || 
            Email: {{$suscriptor->email}}
        </li>
    @endforeach
</ul>