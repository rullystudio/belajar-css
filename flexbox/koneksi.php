<?php 
	$koneksi  = mysqli_connect(
								"localhost",
								"root",
								"",
								"web_app"
								);
	if(mysqli_connect_errno())
	{
		echo "Failed Connection"
		.mysql_connect_error();
	}
?>