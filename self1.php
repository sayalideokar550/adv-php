<html>
   <body>
      <form method="post" action="<?php echo($_SERVER[PHP_SELF]);?>">
        enter rs:
         <input type="text" name="t1">
         <input type="radio" name="r1" value="dollar">DOLLAR<br>
         <input type="radio" name="r1" value="pounds">POUNDS<br> 
         <input type="submit">   
  </body> 
</html>
<?php
  
   $rs=$_POST["t1"];
   $ch=$_POST["r1"]; 
     if($ch==dollar)
       echo("dollar conversion=".$rs/86);
     else
       echo("pounds conversion=".$rs/104)
?>