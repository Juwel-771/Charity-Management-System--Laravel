<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function donor(){
        return $this->belongsTo(Donor::class);
     }
 
     public function setCategoryAttribute($value)
     {
         $this->attributes['category'] = json_encode($value);
     }
 
     public function getCategoryAttribute($value)
     {
         return $this->attributes['category'] = json_decode($value);
     }
}
