<?php
session_start();
include("functions.php");
if(isset($_SESSION['email']))
{
  if($_GET['job_id']and $_GET['file_name'])	
  {
	  $job_id= $_GET['job_id'];
	  $file_name=$_GET['file_name'];
	  deleted_record($job_id,$file_name);
  }
}
else{
	
    echo "<script>window.open('index.php','_self');</script>"; 
	
}

?>