<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function show(){
        $datos=DB::select(" select * from producto ");
        $filtro=array();
        foreach ($datos as $key => $dato){
            if(array_key_exists($dato->categoria, $filtro)){
                array_push($filtro[$dato->categoria], $dato);
            }else{
                $filtro[$dato->categoria] = array($dato);
            }
        }
        return view('home.menu')->with("filtro", $filtro);
         
    }
}

