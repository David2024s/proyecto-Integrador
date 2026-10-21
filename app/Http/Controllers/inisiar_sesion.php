<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use DB;
use Illuminate\Http\Request;

class inisiar_sesion extends Controller
{
    public function singIN()
    {

    if(request('email') == null || request('password') == null || request('password') == ""){
        return view('logeo.login');
    }
        $datos = DB::table('usuario')
            ->select('*')
            ->where('email', request('email'))
            ->where('password', request('password'))
            ->first();

        if ($datos) {
            return view('home');

        } else {
            return view('logeo.login');
        }

    }
}
