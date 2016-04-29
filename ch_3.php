
<?php
header("Content-type:text/html;charset=utf-8");
echo "这是C++风格<br/>"; //这是C++风格的注释
/*
C
风格的多
行注释
*/
echo"只会看到这句话<br/>";
echo"这是shell脚本风格的注释<br/>";#这里的内容是看不到的
?>
<?php
echo'这样会出错的!!!!!!!';//不会看到?>会看到
?>
