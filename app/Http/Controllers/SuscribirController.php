<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuscribirController extends Controller
{
    public function create(){
        return view('suscripcion.create');
    }

    public function save(Request $request){
        // guardar la suscribción
        $suscriptor = DB::table('suscriptores')->insert(array(
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email')
        ));
        return '<div>Suscripto, ver la lista: <a href="/listarSuscripcion">aqui</a></div>';
    }

    public function index(){
        $suscriptores = DB::table('suscriptores')->get();
        return view('suscripcion.index', ['suscriptores' => $suscriptores]);
    }
}
