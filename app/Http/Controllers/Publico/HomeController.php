<?php

namespace App\Http\Controllers\Publico;

use Illuminate\Http\Request;

// Controllers
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    
	public function home(){

		$datos_vista['bienvenido'] = '<div class="bienvenido-1" style="font-size:'.rand(12,72).'px">Bienvenido</div><div class="bienvenido-2" style="font-size:'.rand(12,72).'px">HOle mundos</div>';

		return view('public.home.home',compact('datos_vista'));
	}

}
