
<?php

$conn = mysqli_connect('localhost','root','','projects') or die('connection failed');

if(isset($_POST['Submit'])){

   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
   $password = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
   $cpassword = mysqli_real_escape_string($conn, md5($filter_cpass));
   $select_users = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($password != $cpassword){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `register`(email, password) VALUES('$email', '$password')");
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body{
            background-image: url('nr.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*.top{
            background-color: rgba(255, 255, 255, .5);
            position: absolute;
            left: 0px;
            top: 0px;
            height: 700px;
            width: 1400px;
        }*/
        .login{
            background-color: rgba(255, 255, 255, .5);
            position: absolute;
            height: 250px;
            width: 500px;
            left: 380px;
            top: 50px;
            text-align: center;
        }
        
    </style>
</head>
<body>
<?php 
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        
        ';
    }
}
?>


    <div class="top">
        <div class="login">
            <h2>REGISTER</h2>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="email" required><br><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                <input type="password" name="cpassword" placeholder=" confirm password" required><br><br>
                <input type="submit" class="btn" name="Submit">
            </form>
         </div>
    </div>
    
</body>
</html>