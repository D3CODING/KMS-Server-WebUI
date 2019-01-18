<?php
	header("Content-type:application/txt;charset=ansi");
	header("Content-disposition:attachment;filename=clean.bat;");
	echo "@echo off";
	echo "\r\nslmgr /upk";
	echo "\r\nslmgr /ckms";
	echo "\r\nslmgr /rearm";
?>