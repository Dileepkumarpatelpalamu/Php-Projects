<?php
    session_start();
    include("qzconnect.php");
    if(isset($_SESSION['email']))
    {
        if(isset($_POST['submit']))
        {
            $email=$_POST['txtemail'];
            $job_detail=$_POST['txtjobdetail'];
            $order_date= $_POST['txtorder_date']; 
            $department=$_POST['txtdepartment'];
            $start_date=$_POST['start_date'];
            $end_date=$_POST['End_date']; 
            $website= $_POST['txt_website'];
            $name=$_FILES['doc_name']['name'];
            $name=explode('.',$name);
            $new= end($name);
            $name= time().'.'.$new;
            $path="order_dir/".$name;
            $type=$_FILES['doc_name']['type'];
            $tmp_name=$_FILES['doc_name']['tmp_name'];
            $size=$_FILES['doc_name']['size']; 
            if($email=='' or $job_detail=='' or $order_date=='' or $department==''or $start_date=='' or $end_date=='' or $website==''or $name=='')
            {
              echo "<script>alert('Please fill all required fields.');</script>";
               echo "<script>window.open('profile.php','_self');</script>"; 
            }
            else
            {
               if($new=='pdf' or $new=='jpg' or $new='png' or $new=='jpeg')
               {
                   if($size<=20971520)
                   {
                      $sql="INSERT INTO `jobprofile` ( `job_email`, `job_detail`, `order_date`, `department`, `start_date`, `end_date`, `job_website`, `doc_name`, `upload_date`) VALUES ('$email', '$job_detail', '$order_date', '$department', '$start_date', '$end_date', '$website', '$name', CURRENT_TIMESTAMP)";
                       $status=mysqli_query($con,$sql);
                       if($status)
                       {
                           move_uploaded_file($tmp_name,$path);
                           echo "<script>alert('Document uploading successfully');</script>";
                           echo "<script>window.open('profile.php','_self');</script>"; 
                       }
                       else{
                            echo "<script>alert('Document uploading fail try again');</script>";
                           echo "<script>window.open('profile.php','_self');</script>"; 
                       }
                   }
                   else
                   {
                       echo "<script>alert('file size must be less than 20 MB try again');</script>";
                        echo "<script>window.open('profile.php','_self');</script>"; 
                   }
                   
               }
                else
                {
                    echo "<script>alert('Only required file format that pdf, png, jpg and jpeg file must be accepted.');</script>";
                    echo "<script>window.open('profile.php','_self');</script>"; 
                    
                }
                
                
            }
        }
    }
    else
    {
        echo "<script>window.open('index.php','_self');</script>";
    }

?>