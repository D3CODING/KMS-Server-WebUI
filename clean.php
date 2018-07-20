<?php
header("Content-type: octet/stream");
header("Content-disposition:attachment;filename=clean.bat;");
echo "slmgr /upk";
echo "\nslmgr /ckms";
echo "\nslmgr /rearm";
?>