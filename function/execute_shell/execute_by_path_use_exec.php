<?php
/* Description  :   this script will execute a shell named zsj.sh in this directory
*					it will not show the command like 'ls' and so on,but it will execute
*  Note			:   you need to close safe_mode in php.ini 
*/
shell_exec("./zsj.sh");	
echo "I am ".exec('whoami');
echo "\n";
echo "OK! shell executed!";
?>
