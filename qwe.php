<?php
$web_service=[
        '192.168.43.251',
        '192.168.43.211'
];
$cmd="cd / && ls -l";
$res=shell_exec($cmd);
echo $res;echo '<hr>';die;
?>