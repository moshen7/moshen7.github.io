<?php
header("Content-type: text/html; charset=utf-8");
$robot=$_GET["robot"];
$list=file_get_contents("List.php");
preg_match_all("/【机器：".$robot."】〖主人：(.*?)〗『时间：(.*?)』《状态：(.*?)》/",$list,$nute);
$jcry=date("Y-m-d");
$aaa=$nute[1][0];
$bbb=$nute[2][0];
$ccc=$nute[3][0];
if($ccc==''){
echo "未授权";
}else
if($ccc=="已授权"){
echo "◎.欢迎使用小色批内测版本\n◎.查询账号：".$robot."\n◎.机器主人：".$aaa."\n◎.授权状态：".$ccc."\n◎.到期时间：".$bbb."\n◎.现在时间：".$jcry."\n◎.出现问题联系作者解决";
}
?>