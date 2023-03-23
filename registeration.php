<?php  

$name = $_REQUEST['name'];  
$email = $_REQUEST['email']; 
$password=$_REQUEST['password'];  
   
     $con = mysqli_connect('localhost', 'root', '', 'user');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect MySql: ". mysqli_connect_error());  
    }  


$sql = " insert into accounts (name , email , password )
values ('$name', '$email', '$password' ) ";

if (mysqli_query($con,$sql))
{  header("location:index.html");
 
}

else {
echo '<script>alert("Error")</script>';
}

?>







?>  