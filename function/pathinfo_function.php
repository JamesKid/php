<?php
#===========================================
# pathinfo()	抽取路径信息
#===========================================
$path_parts = pathinfo("/www/htdocs/index.html");
echo $path_parts["dirname"] . "\n";
echo '<br />';
echo $path_parts["basename"] . "\n";
echo '<br />';
echo $path_parts["extension"] . "\n";
echo '<br />';
var_dump($path_parts);
/*
上例将输出：

/www/htdocs
index.html
html
*/

?> 
    


