<?php 

$start = microtime(true);
phpinfo();
$finish = microtime(true);
$exectime = ($finish - $start);

echo "execution time is: ".$exectime;

?>