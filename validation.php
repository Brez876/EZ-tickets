<?php   
   
    $con = mysqli_connect('localhost', 'root', '', 'user');  
    if(mysqli_connect_errno()) {  
        die("Failed to connect MySql: ". mysqli_connect_error());  
    }  



    $email = $_POST['email'];  
    $password = $_POST['password'];  

      
        // prevent from mysqli injection  
        $username = stripcslashes($email);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from accounts where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:index.html");
            echo '<script>alert("Welcome")</script>'; 
        }  
        else{  
            echo '<script>alert("Invalid email or Password")</script>';
          
        }     
?>  