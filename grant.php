<?php
header("Content-type: text/html; charset=utf-8");
$keya=$_GET["key"];
$robot=$_GET["robot"];
$qq=$_GET["qq"];
$time=$_GET["time"];
$list=file_get_contents("List.php");
preg_match_all("/【机器：".$robot."】〖主人：(.*?)〗『时间：(.*?)』《状态：(.*?)》/",$list,$nute);
$jec=$nute[1][0];
$kcrh=date("Y-m-d",strtotime("+$time month"));
$jcry=date("Y-m-d");
include("key.php");
if($keya!=$key){
echo "对接的密钥错误!";
}else
if($robot<="10001"||$robot>="9999999999"){
echo "添加机器人号码错误!";
}else
if($qq<="10001"||$qq>="9999999999"){
echo "添加主人号码错误!";
}else
if($jec!=''){
echo "该机器人号码已授权!";
}else
if($time<"1"){
echo "至少添加一个月!";
}else
if($time=="永久"){
echo "◎.成功授权机器人\n◎.授权号码:".$robot."\n◎.主人号码:".$qq."\n◎.授权月数:永久授权\n◎.到期时间:9999-12-31\n◎.现在时间:".$jcry."\n◎.出现问题联系客服解决";
$myfile = fopen("List.php", "w") or die("未知错误!");
fwrite($myfile,"$list\n【机器：".$robot."】〖主人：".$qq."〗『时间：9999-12-31』《状态：已授权》");
fclose($myfile);
}else
if((floor($time)-$time)!=0||strpos($time,".")!=false){
echo "添加时间不是整数";
}else
if($time!="永久"){
echo "◎.成功授权机器人\n◎.授权号码:".$robot."\n◎.主人号码:".$qq."\n◎.授权月数:".$time."月\n◎.到期时间:".$kcrh."\n◎.现在时间:".$jcry."\n◎.出现问题联系客服解决";
$myfile = fopen("List.php", "w") or die("未知错误!");
fwrite($myfile,"$list\n【机器：".$robot."】〖主人：".$qq."〗『时间：".$kcrh."』《状态：已授权》");
fclose($myfile);
}
?>