<?php
  
   function add(){
    $a = 10;
    $b = 5;
    $add = $a + $a +$b;
    print("<h1>$a + $b =  $add</h1>");
   }
   function sub()
   {
      $a = 10;
      $b = 5;
      $sub = $a - $b;
      print("<h1>$a + $b = $sub</h1>");
   }
   
   function divsion(){
    $a = 10;
    $b = 5;
    $mod = $a - $b;
    print("<h1>$a - $b = $mod</h1>");
   }


   function mod(){
    $a = 10;
    $b = 5;
    $mod = $a * $b;
    print("<h1>$a * $b = $mod</h1>");
   }

   function multi(){
    $a = 10;
    $b = 5;
    $multi = $a / $b;
    print("<h1>$a / $b = $multi</h1>");
   }
   add();
   print("<hr />");
   sub();
   print("<hr />");
   mod();
   print("<hr />");
   divsion();
   print("<hr />");
   multi();
?>