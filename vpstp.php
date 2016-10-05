<?php
$load=str_replace("\\n","\n",file_get_contents("https://ss1.xrea.com/hiroki7v11.s500.xrea.com/console.php?command=". str_replace(" ","%20"
,"curl -b ../cookie.txt -c ../cookie.txt -k ".file_get_contents("vpsuser_".$_COOKIE["vpsuser"].".txt")." https://beescale.com/?do=signInForm-submit")));

$load=str_replace("\\n","\n",file_get_contents("https://ss1.xrea.com/hiroki7v11.s500.xrea.com/console.php?command=". str_replace(" ","%20"
,"curl -b ../cookie.txt -c ../cookie.txt -k  'https://beescale.com/customer/'")));

$load=str_replace("\\n","\n",file_get_contents("https://ss1.xrea.com/hiroki7v11.s500.xrea.com/console.php?command=". str_replace(" ","%20"
,"curl -b ../cookie.txt -c ../cookie.txt -k 'https://beescale.com/customer/?lang=en%26do=changeLanguage'")));

echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>