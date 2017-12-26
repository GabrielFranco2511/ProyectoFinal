<?php

use Illuminate\Database\Seeder;
use App\Medicine;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
       $data= array(

            [   'medicine_name'=> 'Simvastatina',
                'price'=>'3.33',
                'category'=> 'Colesterol',
                'medicine_code'=>'1',
                'description'=>'Colesterol',
                'images'=>'https://d3pq5rjvq8yvv1.cloudfront.net/catalog/product/cache/1/image/262x300/9df78eab33525d08d6e5fb8d27136e95/s/i/simvastatin_5mg_tablets.jpg',
                'slug'=>'Simvastatina',
                'pharmacy_id'=>'1',
                'quantity'=>'3',
                'visibility'=>'1'
                
            ],

               [   'medicine_name'=> 'Amoxicilina',
                'price'=>'2.13',
                'category'=> 'Infecciones',
                'medicine_code'=>'2',
                'description'=>'Infecciones',
                'images'=>'https://d3pq5rjvq8yvv1.cloudfront.net/catalog/product/cache/1/image/262x300/9df78eab33525d08d6e5fb8d27136e95/a/m/amoxicillin_125mg5ml_suspension_80ml_bottle.jpg',
                'slug'=>'Amoxicilina',
                'pharmacy_id'=>'1',
                'quantity'=>'22',
                'visibility'=>'1'
                
            ],

               [ 'medicine_name'=> 'Simvastatina',
                'price'=>'3.33',
                'category'=> 'Colesterol',
                'medicine_code'=>'1',
                'description'=>'Colesterol',
                'images'=>'https://d3pq5rjvq8yvv1.cloudfront.net/catalog/product/cache/1/image/262x300/9df78eab33525d08d6e5fb8d27136e95/s/i/simvastatin_5mg_tablets.jpg',
                'slug'=>'Simvastatina',
                'pharmacy_id'=>'2',
                'quantity'=>'9',
                'visibility'=>'1'
                
            ],

        );

        Medicine::insert($data);
    }
}
