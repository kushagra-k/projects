<?php
/*if(isset($_POST['id']))
 echo $_POST['id']; 
 <br><br>  id: {!! Form::text('id' ,'',array('class'=>'form1','id'=>'id'))!!}
   <br><br>password:{!!Form::password('password', array('class' => 'form1', 'id'=>'password'))!!}*/
?>
<html lang="en">
   <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     
   </head>
 <center>
   {!! Form::open(array('url'=>"trial1"))!!}
  
    <br><br>choice:{!!Form::radio('rb', 'pink')!!}  
      {!!Form::radio('rb','green')!!}
      

  <br><br> {!!Form::submit('Click Me!')!!}
 {!! Form::close() !!}
</center>