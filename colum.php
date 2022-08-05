<?php
header("Content-type: text/html; charset=utf-8");
$list=file_get_contents("List.php");
$result = preg_match_all("/【机器：(.*?)】〖主人：(.*?)〗/",$list,$nute);
$p=$nute[1][0];
if($p==''){
echo "授权列表空空";
}else{
echo "当前授权列表如下\n\n机器人QQ-主人QQ-限30个\n";
for ($x=0; $x < $result && $x<=30; $x++) 
{
$jec=$nute[1][$x];
$n=$nute[2][$x];
echo ($x+1).":".$jec."-".$n."\n";
}
}
?>