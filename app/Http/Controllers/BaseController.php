<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class BaseController extends Controller
{
   
	public function ver_mi_cv()
	{
		$data = array();

	//return view('pdf.mi-cv',compact('data'));
		$pdf = PDF::loadView('pdf.mi-cv', $data);
		return $pdf->stream('invoice.pdf');
	}
}
