<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailcontroller extends Controller
{
    
		public function send ()
	{

		Mail::send(['web'=>'send'],['name','malsha'],function($message){
			$message->to('malshamanthila96@gmail.com','To malsha')->subject('Test Email');
			$message->from('malshamanthila96@gmail.com');
	
				

		});	
		
	}


}
