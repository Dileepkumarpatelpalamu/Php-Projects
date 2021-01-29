<?php
 include("qzconnect.php");
session_start();
     if(isset($_POST['submit']))
     {
        extract($_POST);
         $email=$txtemail;
         $pass=$txtpass;
        $sql="SELECT * FROM `joblogin` WHERE job_email='$email' and job_pass='$pass'";
        $res=mysqli_query($con,$sql);
         if(mysqli_num_rows($res)>0)
         {
             $data=mysqli_fetch_assoc($res);
             $_SESSION['email']=$data['job_email'];
             echo "<script>alert('Login sucessfully');</script>";
             echo "<script>window.open('profile.php','_self');</script>";
         }
         else
         {
           echo "<script>alert('Please Enter valid user name & Passwor, try again');</script>";
           echo "<script>window.open('index.php','_self');</script>";
         }
     }
else{
    echo "<script>window.open('index.php','_self');</script>";
}
        

?>