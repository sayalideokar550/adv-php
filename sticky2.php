<html>
   <body>
      <form method="post" action="sticky2.php">
        enter name:
        <input type="text" name="t1" value="<?php echo($_POST['t1'])?>">
        select cities:
         <select name="s1[]" multiple>
             <option>pune</option>   
             <option>shirdi</option>   
             <option>nagar</option>   
             <option>mumbai</option>
         <input type="submit">   
  </body> 
</html>
<?php
   $s1=$_POST["t1"];
   $s2=$_POST["s1"];
    
      echo("name=".$s1);
      echo("cities=");
    foreach($s2 as $v)
{
     echo(" $v");  
}
?>