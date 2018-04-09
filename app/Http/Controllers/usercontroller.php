<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testregister;

class usercontroller extends Controller
{
	public function store(Request $request){
	testregister::create($request->all());

}   
}


