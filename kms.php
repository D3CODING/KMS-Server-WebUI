<?php
	if (isset($_POST['kms']) && !empty($_POST['kms']))
	{
		header("Content-type:application/txt;charset=ansi");
		header("Content-disposition:attachment;filename=kms.bat;");
		echo "@echo off";
		echo "\r\nslmgr /skms kms.test.com";
		echo "\r\nslmgr /ipk ";
		echo $_POST['kms'];
		echo "\r\nslmgr /ato";
		echo "\r\nslmgr /xpr";
		exit;
	}
	else
	{
		header("Location: ./");
		exit;
	}
?>