<?php

namespace katashop\Http\Controllers;
use katashop\Product;
use Illuminate\Http\Request;

class FrontController extends Controller

{
    public function index()
    {
        return view('front.home');
    }
    public function shirts()
    {
        $shirts=Product::all();
        return view('front.shirts', compact('shirts'));
    }
     public function shirt()
    {
        return view('front.shirt');
    }
 }