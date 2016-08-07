<?php 
    ini_set('display_error','1');
    require_once 'connection.php';
     $eng1="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
          if (empty($_POST["eng"])) {
             $eng1 = "this key is required";
          } 

         else {
              $eng =$_POST["eng"];
             $sql= "SELECT  * FROM info where eng='$eng'";
             $result = mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)){
                echo "<table border='2' style='width:80%'>";
                echo '<tr><th>English</th><th>Hindi</th><th>Sanskrit</th></tr>';
                while($row= mysqli_fetch_assoc($result)){
                $eng=$row["eng"];
                $hindi=$row["hindi"];
                $sanks=$row["sanks"];
                echo "<tr><th>".$eng."</td><td>".$hindi."</td><td>".$sanks."</td></tr>";
               }
               echo"</table>";
            }
            else echo "Meaning is not available"."<br >";
        } 
     
     
        
}
?>


<html>
      <head> 
            <title>Dictionary</title>
	
             <link rel="stylesheet" href="CSS/stylesheet.css" type="text/css">
     <style>div.container { margin-top: 200px; }</style>
     </head>
      <body style="background-image:url(back.jpg)">
	 
	        <div class="container">
            <center>
            <form  name="search" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                  <input type="text" name="eng" placeholder="english"><span class="error" style="background:red">*<?php echo $eng1;?></span><br/><br/>
                  <input type="submit" value ="Submit">

            </form>
          
                
                 <a href=add.php>Add Word</a><br/><br/>
				  <a href=add1.php>Add Sentence</a><br/><br/>
                 <a href=home.php>Search</a><br/>
                 

            </center></div>
     </body>


</html>
