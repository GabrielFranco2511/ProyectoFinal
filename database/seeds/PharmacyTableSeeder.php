<?php

use Illuminate\Database\Seeder;
use App\Pharmacy;

class PharmacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $data= array(

            [   'pharmacy_name'=> 'Farmatodo',
                'address'=>'Avenida Fuerzas Armadas',
                'slug'=> 'Farmatodo',
                
            ],

            [   'pharmacy_name'=> 'Farma Punto',
                'address'=>'Calle 67',
                'slug'=> 'Farma Punto',
                
            ],

        );

        Pharmacy::insert($data); //Modelo//
    }
}
