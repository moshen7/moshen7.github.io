<?php
header("Content-type: text/html; charset=utf-8");
$list=file_get_contents("proxy.php");
$result = preg_match_all("/【代理：(.*?)】/",$list,$nute);
$p=$nute[1][0];
if($p==''){
echo "代理列表空空";
}else{
echo "当前代理列表如下\n\n";
for ($x=0; $x < $result && $x<=50; $x++) 
{
$jec=$nute[1][$x];
echo ($x+1).".QQ：".$jec."\n";
}
}
?>