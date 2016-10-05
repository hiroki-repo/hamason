<?php
function getcloud($option,$postoption,$postoptiontf,$demomode,$gusername,$gpassword){
if($demomode=="true"){$URL = "https://beescale.com/api/".$option;

$USERNAME = "a3d4que6lv4j@sute.jp";
$PASSWORD = "611c2979bf7913df34a0f6d7890cdaf0d60d6931";}else{$URL = $option;

$USERNAME = $gusername;
$PASSWORD = $gpassword;}
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $USERNAME . ":" . $PASSWORD);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
if($postoptiontf=="true"){curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postoption);}
$buf = curl_exec($ch);
curl_close($ch);
 
//echo str_replace("https://beescale.com/api","https://agile-reef-17573.herokuapp.com/api",$buf);

$buf2=simplexml_load_string($buf);
$json = json_encode($buf2);
$xmlar=json_decode($json,TRUE);

return simplexml_load_string($xmlar);
}

$instances=getcloud("instances","","false","false","","");

$xmlars=getcloud("instances","","false","false","","");
$xmlars1=$xmlars["actions"];
$xmlars2=$xmlars1["link"];
$xmlars3=$xmlars2["0"];
$xmlars4=$xmlars3["@attributes"];
$boot=str_replace("https://beescale.com/api/","",$xmlars3["@attributes"]);

if($instances["stats"]=="pending"){$vmstatus="offline";}else{if($instances["stats"]=="poweroff"){$vmstatus="offline";}else{$vmstatus="online";}}

if($_POST["key"]=="test"){
if($_POST["hash"]=="test"){
if($_POST["status"]=="true"){echo "<vmstat>".$vmstatus."</vmstat>";}
if($_POST["action"]=="status"){
echo "<status>success</status><statusmsg>".$vmstatus."</statusmsg>";}
if($_POST["action"]=="make"){
$instances=getcloud("instances",$_GET,"true","false","","");
echo "<status>success</status><statusmsg>vm created</statusmsg>";}
if($_POST["action"]=="shutdown"){
echo "<status>success</status><statusmsg>shutdown</statusmsg>";}
if($_POST["action"]=="reboot"){
echo "<status>success</status><statusmsg>rebooted</statusmsg>";}
if($_POST["action"]=="boot"){
$instances=getcloud($boot,"","true","false","","");
echo "<status>success</status><statusmsg>booted</statusmsg>";}
if($_POST["action"]=="info"){echo "<ipaddr>123.123.123.123,122.122.122.122,111.111.111.111</ipaddr><hdd>10240000000,30720000,993280000,percentused</hdd><mem>1024000000,1024000,1022976000,percentused</mem><bw>10240000000000,1024000000,1022976000000,percentused</bw><hostname>hirokivps</hostname><ipaddress>".$instances["public_addresses"]."</ipaddress><password>".$instances["password"]."</password>";}
}else{echo "<status>error</status><statusmsg>Invalid hash</statusmsg>";}
}else{echo "<status>error</status><statusmsg>Invalid key</statusmsg>";}
