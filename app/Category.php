<?php

namespace katashop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 protected $fillable = ['name'];
    public function products(){
    	//return $this->hasMany('katashop\Product');
    	return $this->hasMany(Product::class);
    }
}
