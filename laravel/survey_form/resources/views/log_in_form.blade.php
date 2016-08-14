 
    <html lang="en">
   <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     
   </head>
    
    <body> <center><h2> Survey Form</h2></center>
    </body>

    <center>
      {!! Form::open(array('url'=>"log_in_result"))!!}
  
       <br><br>  name: {!! Form::text('name' ,'',array('class'=>'form1','id'=>'name','placeholder'=>'your name'))!!}
       <br><br>  email: {!! Form::text('email' ,'',array('class'=>'form1','id'=>'email','placeholder'=>'test@test.com'))!!}
       <br><br> {!!Form::submit('Click Me!')!!}
 
       {!! Form::close() !!}
   </center>



<!-- outputing differnet msgs-->

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<center>
 <h3> 
@if(Session::has('completed_survey'))

  {{Session::get('completed_survey')}}

@endif
</h3>
</center>
