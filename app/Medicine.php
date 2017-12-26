<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
     protected $table = 'medicines';
     protected $fillable =['medicine_code','medicine_name','description','price','images','category','slug','pharmacy_id','quantity','visibility'];
     public $timestamps = false;

    public function pharmacy()
   {
   	return $this->belongsTo(Pharmacy::class);
   }
}



