<?php
 function display_document()
 {
	 include('qzconnect.php');
     $count=0;
     $sql="SELECT * FROM `jobprofile` order by job_id desc";
     $result=mysqli_query($con,$sql);
     while($data=mysqli_fetch_assoc($result))
     {
         $count++;
         $job_detail=$data['job_detail'];
         $order_date=$data['order_date'];
         $department=$data['department'];
         $start_date=$data['start_date'];
         $end_date=$data['end_date'];
         $website=$data['job_website'];
		 $doc_name=$data['doc_name'];
		 $job_id=$data['job_id'];
		 echo 
			 "
			 <tr>
				  <td>$count</td>
				  <td>$order_date</td>
				  <td>$job_detail</td>
				  <td>$department</td>
				  <td>$start_date</td>
				  <td>$end_date</td>
				  <td><a href='http://$website'target='_blank'>$website</a></td>
				  <td><a href='order_dir/$doc_name' target='_blank'>View</a></td>";
		 if(isset($_SESSION['email']))
		 {
		         echo "<td><a href='deleted.php?job_id=$job_id&file_name=$doc_name' target='_blank'>Delete</a></td>";
		 }
		 else{
			echo "<td></td></tr>";
		 }
         
     }
     
 }
function deleted_record($job_id,$file_name)
{
	include('qzconnect.php');
	$sql="DELETE from jobprofile where job_id=$job_id";
	$detete=mysqli_query($con,$sql);
	if($detete)
	{
				unlink('order_dir/'.$file_name);
				echo "<script>alert('Job_id deleted sucessfully.');</script>";
                echo "<script>window.open('profile.php','_self');</script>"; 	
	}
	else
	{
		echo "<script>alert('Deleted error try again');</script>";
        echo "<script>window.open('profile.php','_self');</script>"; 
		
	}
}

?>