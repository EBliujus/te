<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'image', 'days', 'cat_id'];

   public function  ProductbyCat()
   {
        return $this->belongsTo(Cat::class, 'cat_id', 'id');
   }

}
