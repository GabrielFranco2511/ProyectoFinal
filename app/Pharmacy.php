<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    
     protected $table = 'pharmacies';
     protected $fillable =['pharmacy_name','address'];
     public $timestamps = false;


     public function medicine()
    {
    	$this->hasMany(Medicine::class);
    }
}
