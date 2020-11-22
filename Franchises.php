<?php

if( isset($_POST['name'])|| isset($_POST['email'])|| isset($_POST['contact'])||
 isset($_POST['address']) || isset($_POST['subject'])){
   $firstname=$_POST['name'];
   $lastname=$_POST['email'];
   $country=$_POST['contact'];
   $subject=$_POST['address'];
   $subject=$_POST['subject'];
}
   $conn = new mysqli('localhost:3308','root','','tests');
   if($conn->connect_error)
   {
     die('Connection Failed:'.$conn->connect_error);
   }
   else{
     $stmt=$conn->prepare("insert into franchisee(name, email,contact,address,subject) values(?,?,?,?,?)");
     $stmt->bind_param("sssss",$name,$email,$contact,$address,$subject);
     $stmt->execute();
     echo "Thanks for your feedback..........";
     $stmt->close();
     $conn->close();
   }
?>
