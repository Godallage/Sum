<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class mydb extends Controller
{
  public function dbview(request $request)
  { $id=$request->input("id");
    // $id=48;
      $user=db::table('srym_payment')->where('id','=',$id)->get();
     echo json_encode($user);
    //  echo 'sdgdsg';
  }
}
