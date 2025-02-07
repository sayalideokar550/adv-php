<html>
   <body>
      <form method="post" action="sticky1.php">
        enter string1:
        <input type="text" name="t1" value="<?php echo($_POST['t1'])?>">
        enter string2:
        <input type="text" name="t2" value="<?php echo($_POST['t2'])?>">
        <input type="submit">  
  </body> 
</html>
<?php
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];
    if($s1==$s2)
      echo("string are same");
    else
     echo("string are not same");  
?>