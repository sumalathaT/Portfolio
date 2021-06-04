<?php
session_start();
error_reporting(0);
include('includes/conta.php');
if(isset($_POST['submit']))
  {
    
    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $mobilenumber=$_POST['phone'];
    $enquiry=$_POST['message'];
 

    $query=mysqli_query($con,"insert into  conta(name,email,phone,message) values('$name','$email','$phone','$message')");
        if ($query) {
    $msg="Your enquiry has been sent successfully.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}