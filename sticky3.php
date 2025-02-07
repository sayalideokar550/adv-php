<html>
   <body>
      <form method="post" action="sticky3.php">
        select lanuages:
        <input type="checkbox" name="c1[]" value="java" <?php if(in_array('java',$_POST['c1'])) echo('checked');?>>JAVA<br>
        <input type="checkbox" name="c1[]" value="php" <?php if(in_array('php',$_POST['c1']))echo('checked');?>>PHP<br>
        <input type="checkbox" name="c1[]" value="c" <?php if(in_array('c',$_POST['c1']))echo('checked');?>>C<br>
        <input type="checkbox" name="c1[]" value="c++" <?php if(in_array('c++',$_POST['c1']))echo('checked');?>>C++<br>
        
         <input type="submit">   
  </body> 
</html>
<?php
  
   $s2=$_POST["c1"];
    
     
      echo("selected language=");
    foreach($s2 as $v)
{
     echo(" $v");  
}
?>