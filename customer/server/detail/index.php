<?php
echo substr(str_replace(file_get_contents("../../../unmail_".$_COOKIE["vpsuser"].".txt"),$_COOKIE["customermail"],str_replace(file_get_contents("../../../delmes7.txt"),"",str_replace(file_get_contents("../../../delmes6.txt"),"",str_replace(file_get_contents("../../../delmes5.txt"),"",str_replace(file_get_contents("../../../delmes4.txt"),"",str_replace("BeeScale","",str_replace(file_get_contents("../../../delmes3.txt"),"",str_replace(file_get_contents("../../../delmes2.txt"),"",str_replace(file_get_contents("../../../delmes.txt"),"",str_replace("/customer/server/detail","/customer/server/detail/",str_replace("\\n","\n",file_get_contents("https://ss1.xrea.com/hiroki7v11.s500.xrea.com/console.php?command=". str_replace(" ","%20"
,"curl -b ../cookie.txt -c ../cookie.txt -k 'https://beescale.com/customer/server/detail?".str_replace(",","%2c",str_replace("=","%3D",str_replace("?","%3F",str_replace("&","%26",$_SERVER["QUERY_STRING"]."'"))))))))))))))))),13,-12);
if (isset($_GET["do"])){echo '<meta http-equiv="refresh" content="0;URL=/customer/">';}
?>