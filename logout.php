<?php
session_start();
if(isset($_SESSION['email']))
{
        if($_GET['email']==$_SESSION['email'])
        {
            unset($_SESSION['email']);
            echo "<script>alert('You are logout successfully.');</script>";
            echo "<script>window.open('index.php','_self');</script>";

        }
	else{
		echo "<script>alert('You are already logout successfully.');</script>";
        echo "<script>window.open('index.php','_self');</script>";
		
	}
}
else{
    echo "<script>window.open('index.php','_self');</script>"; 
}

?>