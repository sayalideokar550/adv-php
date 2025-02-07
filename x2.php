<?php
 $xml=simplexml_load_file("x1.xml");
  if($xml==false)
   {
      die("error...file not found");
   }
  $r=$_POST["t1"];
   $f=0;
   foreach($xml->info as $a)
    {
       if($a->rno==$r)
       {
          f=1;
      echo($a->rno);
     echo($a->name);
     echo($a->per);
      
   }
     
    }
if(f==0)
 echo("not found");






?>