<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class logincontroller extends Controller
{
    public function testlogin(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');

		$checktestlogin = DB::table('testregisters')->where(['email'=>$email ,'pwd'=>$password])->get();
		


if($checktestlogin->isempty())
{
echo"Login Successfully";
	}
else{

	echo"Login faild";
}





















	}
}
