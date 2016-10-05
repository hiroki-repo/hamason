<?php
function getcloud($option,$postoption,$postoptiontf){
$URL = "https://beescale.com/".$option;

$USERNAME = "a3d4que6lv4j@sute.jp";
$PASSWORD = "611c2979bf7913df34a0f6d7890cdaf0d60d6931";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $USERNAME . ":" . $PASSWORD);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
if($postoptiontf=="true"){curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postoption);}
$buf = curl_exec($ch);
curl_close($ch);
 
echo str_replace("https://beescale.com/api","https://agile-reef-17573.herokuapp.com/api",$buf);
return simplexml_load_string($buf);
}

if($_POST["key"]=="test"){
if($_POST["hash"]=="test"){
if($_POST["status"]=="true"){echo "<vmstat>online</vmstat>";}
if($_POST["action"]=="status"){
echo "<status>success</status><statusmsg>online</statusmsg>";}
if($_POST["action"]=="shutdown"){
echo "<status>success</status><statusmsg>shutdown</statusmsg>";}
if($_POST["action"]=="reboot"){
echo "<status>success</status><statusmsg>rebooted</statusmsg>";}
if($_POST["action"]=="boot"){
echo "<status>success</status><statusmsg>booted</statusmsg>";}
if($_POST["action"]=="info"){echo "<ipaddr>123.123.123.123,122.122.122.122,111.111.111.111</ipaddr><hdd>10240000000,30720000,993280000,percentused</hdd><mem>1024000000,1024000,1022976000,percentused</mem><bw>10240000000000,1024000000,1022976000000,percentused</bw><hostname>hirokivps</hostname><ipaddress>37.59.241.174</ipaddress>";}
}else{echo "<status>error</status><statusmsg>Invalid hash</statusmsg>";}
}else{echo "<status>error</status><statusmsg>Invalid key</statusmsg>";}
