<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use Illuminate\Routing\Controller;

class log_in extends Controller
{
    



   public function log_in_form()
   {
   	 return view('log_in_form');
   }


    public function log_in_result(Request $request)
    {  
    	
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
           
        ]);

        if ($validator->fails()) {
            return redirect('log_in_form')
                        ->withErrors($validator)
                        ->withInput();
        }

        else { $name=$request->name;
             $request->session()->put('name', $name);
        	//return redirect('log_in_form')->with("success","Well done bro!")->with('crap',"bhalu");
            if($name=="kush")
             return redirect('log_in_form')->with("not_logged_in","u have already completed the survey!");
               //echo "true";
            else
             return redirect('survey_form');
        
        	 
        }

         
    }
}
