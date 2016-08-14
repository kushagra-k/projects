<html lang="en">
   <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     
   </head>

 <center><h2> Questions</h2> </center>
<br>
   <center>
   {!! Form::open(array('url'=>"survey_result"))!!}
   <h4>   Ever been on a date?</h4>
      Yes: {!!Form::radio('answer_1', 'yes')!!} 
      &nbsp No: {!!Form::radio('answer_1','no')!!}
     
    
       <br>
       <h4>Just love the thought of a night out?</h4> 
       Yes: {!!Form::radio('answer_2', 'yes')!!}  
      &nbsp No: {!!Form::radio('answer_2','no')!!}

      
     <br>
     <h4> Mr.Alcohol is your new BFF :))</h4>     
         Yes: {!!Form::radio('answer_3', 'yes')!!}  
         &nbsp  No: {!!Form::radio('answer_3','no')!!}  
     
      <br>
      <h4> What about supplementary exams?</h4>    
       Yes: {!!Form::radio('answer_4', 'yes')!!}  
       &nbsp No: {!!Form::radio('answer_4','no')!!} 

      <br>
      <h4> Never felt like studying during exams?</h4>    
       Yes: {!!Form::radio('answer_5', 'yes')!!}  
       &nbsp No: {!!Form::radio('answer_5','no')!!}                                    
      

    <br><br> {!!Form::submit('Click Me!')!!}
    {!! Form::close() !!}
</center>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(Session::has('success'))

  {{Session::get('success')}}

@endif


