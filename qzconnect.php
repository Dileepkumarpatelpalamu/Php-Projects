<?php
 $servername="localhost";
 $user="root"; //dsongonl_patel
 $password=""; //DILEEP51patel#
 $database="dsong"; //dsongonl_pimw
 $con=mysqli_connect($servername,$user,$password,$database);
	if($con)
	{
        
	}
	else{
		echo "Database Could not be Connected";
		die;
	}
 ?>