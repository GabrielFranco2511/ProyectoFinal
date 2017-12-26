<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Medicine;
use App\Pharmacy;
use Illuminate\Support\Facades\Cache;


class MedicineController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth',
        [
            'only',
            [
                'create', 'store'
            ]
        ]);
    }

    public function index()
    {
    	$medicines= Medicine::all();
		$pharmacies= Pharmacy::all();
    	//dd($medicine);
    	return view('medicine.index', compact('medicines','pharmacies'));
    }

    public function create()
    {	return view('medicine.create');
    
    }

      public function store(Request $request)
    {	

    	$medicine = Medicine::create([
    			'medicine_code'=>$request->medicine_code,
                'slug'=>$request->medicine_name,
    			'medicine_name'=>$request->medicine_name,
    			'category'=> $request->category,
    			'description'=> $request->description,
    			'price'=> $request->price,
                'images'=>$request->images,
                'pharmacy_id'=>$request->pharmacy_id,
                'quantity'=>$request->quantity,
                'visibility'=>$request->quantity,
    			
    				]);

        // $pharmacy= Pharmacy::create([
           //     'pharmacy_name'=>$request->pharmacy_name,
             //   'address'=> $request->address]);

    	$message= $medicine ? 'Medicina agregada correctamente' : 'La medicina no pudo guardarse';
    		return redirect()->route('medicine.index')->with('message',$message);


        }

     public function show(Medicine $medicine)
    {   
       return $medicine;
    }

     public function edit(Medicine $medicine)
    {   
         return view('medicine.edit',compact('medicine')) ;
    }




      public function update(Request $request, Medicine $medicine)
    {   
        $medicine->fill($request->all());
        $medicine->slug= str_slug($request->get('medicine_name'));

        $updated= $medicine->save();

        $message= $medicine ? 'Medicina actualizada correctamente' : 'La medicina no pudo actualizarse';

        return redirect()->route('medicine.index')->with('message',$message);

    }

       public function destroy(Request $request, Medicine $medicine)
    {   
        $delete= $medicine->delete();

        $message= $delete ? 'Medicina elimina correctamente)':'La categoria no pudo eliminarse ';
        return redirect()->route('medicine.index')->with('message',$message);
    }


}
