<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { User::truncate();	
       $data= array(

       		[	'name'=> 'Gabriel',
       			'last_name'=>'Franco',
       			'email'=> 'gafranco1994@gmail.com',
       			'password'=>\Hash::make('1234')
       		],
       	);

       	User::insert($data); //Modelo//
    }
}
