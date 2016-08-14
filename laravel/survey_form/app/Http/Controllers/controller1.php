<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class controller1 extends Controller
{
   public function home()
   {

     $p=['kk' ,'vrun']; 

	return view('pages/try',compact('p'));
   }

   public function trial()
   {
   
     
  return view('trial');
   }

    public function trial1(Request $request)
   {
   
  /* $id= $_POST['id'];
   $password=  $_POST['password'];	*/
  echo $request->rb;

}


}
