<?php
	//mysql://b221e2a43168ce:ce591b61@us-cdbr-iron-east-05.cleardb.net/heroku_d0442fce73407f0?reconnect=true
	$host='us-cdbr-iron-east-05.cleardb.net';
	$uname='b221e2a43168ce';
	$pwd='ce591b61';
	$db="heroku_d0442fce73407f0";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$Max=$_REQUEST['Max'];
	$Avg=$_REQUEST['Avg'];
	$Dist=$_REQUEST['Dist'];
	$Latitude=$_REQUEST['Latitude'];
	$Longitude=$_REQUEST['Longitude'];
	$Alt=$_REQUEST['Alt'];
	$Time=$_REQUEST['Time'];
	$Device_id=$_REQUEST['Device_id'];


	$flag['code']=0;

	if($r=mysql_query("insert into speedometer values('$Max','$Avg','$Dist','$Latitude','$Longitude','$Alt','$Time','$Device_id') ",$con))
	{
		$flag['code']=1;
		echo"Data Inserted";
	}

	print(json_encode($flag));
	mysql_close($con);
?>