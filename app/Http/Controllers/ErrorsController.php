<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends BaseController
{
    
	// Error 500 view
	public function error_500(){
		return view('errors.500');
	}


}
