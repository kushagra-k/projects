
<?php 
    ini_set('display_errors', '1');
    require_once 'connection.php';
    if(!empty($_POST['eng'])&&!empty($_POST['hindi'])&&!empty($_POST['sanks'])){
     $eng=$_POST['eng'];
     $hindi=$_POST['hindi'];
     $sanks=$_POST['sanks'];
   $qry = "INSERT INTO info (eng ,hindi,sanks) VALUES ('$eng','$hindi','$sanks')";
  
   if (mysqli_query($conn, $qry)) 
    header('Location:home.php');
    echo "Error: " . "<br>" . mysqli_error($conn);
}

   
?>
<html>
      <head>Addition page:You Can Add Word Here
<style>div.container { margin-top: 200px; }</style>
</head>
      <body style="background-image:url(back.jpg)">
 <div class="container">
                <center>
             <form name="addition" method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
               <input type="text" name="eng"  placeholder="english"><br /><br />
               <input type="text" name="hindi" placeholder="hindi"><br /><br />
               <input type="text" name="sanks" placeholder="sanskrit"><br /><br />
               <input type="submit" value="Submit">

             </form>
              </center></div>
     </body>
</html>
