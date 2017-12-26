<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Medicine;
use App\Pharmacy;


class PageController extends Controller
{	public function index()
	{	$medicines = Medicine::all();
    	return view('search', compact('medicines'));
	}

	
	public function search(Request $request)

	{
		$valorbuscado= $request->medicina;
		$medicines = Medicine::where('medicine_name','like','%'.$valorbuscado.'%')->get();
		//$pharmacies = 
		//$pharmacy_id= $medicines->pharmacy_id;
		//$pharmacies= Pharmacy::where('id')->get();
		
		return view('results.end', compact('medicines','pharmacies'));
		

		
		//return (search);
		//return('find');
	}
}
