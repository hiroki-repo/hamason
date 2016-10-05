<?php
$page=str_replace(file_get_contents("../unmail_".$_COOKIE["vpsuser"].".txt"),$_COOKIE["customermail"],str_replace(file_get_contents("../delmes7.txt"),"",str_replace(file_get_contents("../delmes6.txt"),"",str_replace(file_get_contents("../delmes5.txt"),"",str_replace(file_get_contents("../delmes4.txt"),"",str_replace("BeeScale","",str_replace(file_get_contents("../delmes3.txt"),"",str_replace(file_get_contents("../delmes2.txt"),"",str_replace(file_get_contents("../delmes.txt"),"",str_replace("/customer/server/detail","/customer/server/detail/",str_replace("\\n","\n",file_get_contents("http://agile-reef-17573.herokuapp.com/console.php?command=". str_replace(" ","%20"
,"curl -b ~/cookie.txt -c ~/cookie.txt -k  https://beescale.com/customer/")))))))))))));
echo substr($page,13,-12);
?>
