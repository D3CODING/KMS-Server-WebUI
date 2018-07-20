<?php
	$kms_server = 'xxxx';
	if (!empty($_POST['kms']))
	{
		header("Content-type: octet/stream");
		header("Content-disposition:attachment;filename=kms.bat;");
		echo "slmgr /skms ".$kms_server;
		echo "\nslmgr /ipk ";
		switch ($_POST['kms'])
		{
			case 'Windows Server 2016 Datacenter':
				echo 'CB7KF-BWN84-R7R2Y-793K2-8XDDG';
				break;
			case 'Windows Server 2016 Standard':
				echo 'WC2BQ-8NRM3-FDDYY-2BFGV-KHKQY';
				break;
			case 'Windows Server 2016 Essentials':
				echo 'JCKRF-N37P4-C2D82-9YXRT-4M63B';
				break;
			case 'Windows 10 Professional':
				echo 'W269N-WFGWX-YVC9B-4J6C9-T83GX';
				break;
			case 'Windows 10 Enterprise':
				echo 'NPPR9-FWDCX-D2C8J-H872K-2YT43';
				break;
			case 'Windows 10 Education':
				echo 'NW6C2-QMPVW-D7KKK-3GKT6-VCFB2';
				break;
			case 'Windows 10 Enterprise 2015 LTSB':
				echo 'WNMTR-4C88C-JK8YV-HQ7T2-76DF9';
				break;
			case 'Windows 10 Enterprise 2016 LTSB':
				echo 'DCPHK-NFMTC-H88MJ-PFHPY-QJ4BJ';
				break;
			case 'Windows 8.1 Professional':
				echo 'GCRJD-8NW9H-F2CDX-CCM8D-9D6T9';
				break;
			case 'Windows 8.1 Enterprise':
				echo 'MHF9N-XY6XB-WVXMC-BTDCT-MKKG7';
				break;
			case 'Windows Server 2012 R2 Server Standard':
				echo 'D2N9P-3P6X9-2R39C-7RTCD-MDVJX';
				break;
			case 'Windows Server 2012 R2 Datacenter':
				echo 'W3GGN-FT8W3-Y4M27-J84CP-Q3VJ9';
				break;
			case 'Windows Server 2012 R2 Essentials':
				echo 'KNC87-3J2TX-XB4WP-VCPJV-M4FWM';
				break;
			case 'Windows 8 Professional':
				echo 'NG4HW-VH26C-733KW-K6F98-J8CK4';
				break;
			case 'Windows 8 Enterprise':
				echo '32JNW-9KQ84-P47T8-D8GGY-CWCK7';
				break;
			case 'Windows Server 2012':
				echo 'BN3D2-R7TKB-3YPBD-8DRP2-27GG4';
				break;
			case 'Windows Server 2012 Single Language':
				echo '2WN2H-YGCQR-KFX6K-CD6TF-84YXQ';
				break;
			case 'Windows Server 2012 Country Specific':
				echo '4K36P-JN4VD-GDC6V-KDT89-DYFKP';
				break;
			case 'Windows Server 2012 Server Standard':
				echo 'XC9B7-NBPP2-83J2H-RHMBY-92BT4';
				break;
			case 'Windows Server 2012 MultiPoint Standard':
				echo 'HM7DN-YVMH3-46JC3-XYTG7-CYQJJ';
				break;
			case 'Windows Server 2012 MultiPoint Premium':
				echo 'XNH6W-2V9GX-RGJ4K-Y8X6F-QGJ2G';
				break;
			case 'Windows Server 2012 Datacenter':
				echo '48HP8-DN98B-MYWDG-T2DCC-8W83P';
				break;
			case 'Windows 7 Professional':
				echo 'FJ82H-XT6CR-J8D7P-XQJJ2-GPDD4';
				break;
			case 'Windows 7 Enterprise':
				echo '33PXH-7Y6KF-2VJC9-XBBR8-HVTHH';
				break;
			case 'Windows Server 2008 R2 Web':
				echo '6TPJF-RBVHG-WBW2R-86QPH-6RTM4';
				break;
			case 'Windows Server 2008 R2 HPC edition':
				echo 'TT8MH-CG224-D3D7Q-498W2-9QCTX';
				break;
			case 'Windows Server 2008 R2 Standard':
				echo 'YC6KT-GKW9T-YTKYR-T4X34-R7VHC';
				break;
			case 'Windows Server 2008 R2 Enterprise':
				echo '489J6-VHDMP-X63PK-3K798-CPX3Y';
				break;
			case 'Windows Server 2008 R2 Datacenter':
				echo '74YFP-3QFB3-KQT8W-PMXWJ-7M648';
				break;
			case 'Windows Server 2008 R2 for Itanium-based Systems':
				echo 'GT63C-RJFQ3-4GMB6-BRFB9-CB83V';
				break;
			case 'Windows Vista Business':
				echo 'YFKBB-PQJJV-G996G-VWGXY-2V3X8';
				break;
			case 'Windows Vista Enterprise':
				echo 'VKK3X-68KWM-X2YGT-QR4M6-4BWMV';
				break;
			case 'Windows Web Server 2008':
				echo 'WYR28-R7TFJ-3X2YQ-YCY4H-M249D';
				break;
			case 'Windows Server 2008 Standard':
				echo 'TM24T-X9RMF-VWXK6-X8JC9-BFGM2';
				break;
			case 'Windows Server 2008 Standard without Hyper-V':
				echo 'W7VD6-7JFBR-RX26B-YKQ3Y-6FFFJ';
				break;
			case 'Windows Server 2008 Enterprise':
				echo 'YQGMW-MPWTJ-34KDK-48M3W-X4Q6V';
				break;
			case 'Windows Server 2008 Enterprise without Hyper-V':
				echo '39BXF-X8Q23-P2WWT-38T2F-G3FPG';
				break;
			case 'Windows Server 2008 HPC':
				echo 'RCTX3-KWVHP-BR6TB-RB6DM-6X7HP';
				break;
			case 'Windows Server 2008 Datacenter':
				echo '7M67G-PC374-GR742-YH8V4-TCBY3';
				break;
			case 'Windows Server 2008 Datacenter without Hyper-V':
				echo '22XQ2-VRXRG-P8D42-K34TD-G3QQC';
				break;
			case 'Windows Server 2008 for Itanium-Based Systems':
				echo '4DWFP-JF3DJ-B7DTH-78FJB-PDRHK';
				break;
			default:
				header("Location: ./");
				exit;
		}
		echo "\nslmgr /ato";
		echo "\nslmgr /xpr";
		exit;
	}
	else
	{
		echo 'Not Found!';
	}
?>