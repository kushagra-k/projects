<html lang="en">
   <head tilte="fun survey!">
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     
   </head>

   <body>
   <center><h2> @if(Session::has('name'))

         Thank you  {{Session::get('name')}} !

           @endif
      </h2>
     <br><br><h3>Your answers have been recorded</h3> 
      <br><h2>  
        @if(Session::has('engineer'))

      {{Session::get('engineer')}}

       @endif
   </h2>
   </center>	
   </body>


   <center>
     {!! Form::open(array('url'=>"go_back"))!!}   
   	 {!!Form::submit('End Survey!')!!}
   	 {!! Form::close() !!}
   </center>

  
 
