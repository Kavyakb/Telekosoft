<?php
if( isset($_POST['firstname'])|| isset($_POST['lastname'])|| isset($_POST['country'])|| isset($_POST['subject'])){
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $country=$_POST['country'];
   $subject=$_POST['subject'];
}
   $conn = new mysqli('localhost:3308','root','','tests');
   if($conn->connect_error)
   {
     die('Connection Failed:'.$conn->connect_error);
   }
   else{
     $stmt=$conn->prepare("insert into contact(firstname, lastname,country,subject) values(?,?,?,?)");
     $stmt->bind_param("ssss",$firstname,$lastname,$country,$subject);
     $stmt->execute();
     echo "Thanks for your feedback..........";
     $stmt->close();
     $conn->close();
   }
?>
