<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use Illuminate\Routing\Controller;

class survey extends Controller
{
    



   public function survey_form()
   {
   	 return view('survey_form');
   }


    public function survey_result(Request $request)
    {  
    
    $t=$request->session()->get('name');
    echo $t;

    	$validator = Validator::make($request->all(), [
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
            'answer_4' => 'required',
            'answer_5' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('survey_form')
                        ->withErrors($validator)
                        ->withInput();
        }

        else { 
        	 return redirect('survey_form')->with("success","Well done bro!")->with('crap',"bhalu");

        	 
        }

         
    }
}
