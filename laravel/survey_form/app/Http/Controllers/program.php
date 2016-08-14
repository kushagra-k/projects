<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use Illuminate\Routing\Controller;
use Session;
use DB;


class program extends Controller
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
               $email=$request->email;
               $date=date('Y-m-d H:i:s'); 
               $request->session()->put('email',$email);
               $request->session()->put('name',$name);
              
  
           $data=array(
                'name'=>$name,
                'email'=>$email,
                'created_at'=>$date
                
                );

   $check_exists=DB::table('survey_result')->select('email')->where('email',$email)->get();

      if(count($check_exists)==0)
       {if(DB::table('survey_result')->insert($data))
            return redirect('survey_form');
       }

       else 
       return redirect('log_in_form')->with('completed_survey',"You have already completed the survey!");    


        
        	 
        }

         
    }





   public function survey_form()
   {
   	 return view('survey_form');
   }


    public function survey_result(Request $request)
    {  
         $date=date('Y-m-d H:i:s'); 
      $email=$request->session()->get('email');

    	$validator = Validator::make($request->all(), [
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
            'answer_4' => 'required',
            'answer_5' => 'required',
           
        ]);
   

        if ($validator->fails()) {
            return redirect('survey_form')
                        ->withErrors($validator)
                        ->withInput();
        }

        else {    $answer_1=$request->answer_1;
                  $answer_2=$request->answer_2;
                  $answer_3=$request->answer_3;
                  $answer_4=$request->answer_4;
                  $answer_5=$request->answer_5; 
                   
                   $data=array(
                'result_1'=>$answer_1,
                'result_2'=>$answer_2,
                'result_3'=>$answer_3,
                'result_4'=>$answer_4,
                'result_5'=>$answer_5,
                 'updated_at'=>$date
                );
               

                  if(DB::table('survey_result')->where('email',$email)->update($data))
                  {   $name=$request->session()->get('name');
                      if($answer_1=='yes' && $answer_2=='yes' &&$answer_3=='yes' && $answer_4=='yes' && $answer_5=='yes')
                        return redirect('thank_you')->with("engineer","Aap to Engineer Nikle :))")->with('name',$name);
                        
                        else 
                        return redirect('thank_you')->with('name',$name);
                           

                  }
               

        	 
        }

         
    }

    public function thank_you()
    {  
        return view('thank_you'); 
    }

    public function go_back_to_page()
    { //session()->flush();
       return view('log_in_form'); 

    }
}
