<?php

namespace katashop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	 protected $fillable = [
        'name', 'description', 'size','image','category_id',
    ];


    //La relacion inversa 
    public function category()
    {
    	$this->belongsTo(Category::class);
    }
}
