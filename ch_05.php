<!doctype>
<html>
 <head>
  <meta charset = "utf-8">
  <link rel = "stylesheet" href = "style.css"/>
  <title>扔硬币</title>
 </head>
 <body>
  <?php
   $headCount = 0;
   $count     = 0;
   while ($headCount<10)
   {
    $ra = rand(0,1);
    if ($ra)
    {
     $headCount ++ ;
     echo "<p class = \"coin\">H</p>";
    }
    else
    {
     echo "<p class = \"coin\">T</p>";
    }
    $count++;
   }
   echo "<p>共扔了{$count}次硬币，才有10次正面</p>";
  ?>
 </body>
</html>
