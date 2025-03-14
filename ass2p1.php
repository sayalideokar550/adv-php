//Write a PHP script to Design a form to accept a number from the user to check whether
//number is palindrome or not. (Use the concept of self processing page)
<html>
 <body>  
   <form method="post" action="<?php echo($_SERVER['PHP_SELF']);?>">
    enter number:
    <input type="text" name="t1">
    <input type="submit">  
 </body> 
</html>
<?php
 //accessing value
$n=$_POST["t1"];
$n1=$n;

  

  
 $r=strrev($n);

echo($r);
if($n1==$r)
 echo("number is palindrom");
else
 echo("number is not palindrom");
?>