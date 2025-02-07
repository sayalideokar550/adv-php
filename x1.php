<?php
 $xml=simplexml_load_file("x1.xml");
  if($xml==false)
   {
      die("error...file not found");
   }
   echo("<table border='1'>");
     echo("<tr><th>rno<th>name<th>per</tr>");
   foreach($xml->info as $a)
    {
      echo("<tr><td>".$a->rno);
     echo("<td>".$a->name);
     echo("<td>".$a->per);
      echo("</tr>");
     
    }
   echo("</table>");






?>