
<?php

$conn = mysqli_connect('localhost','root','','projects') or die('connection failed');
session_start();
if (isset($_POST['Submit'])) {

    $email =$_POST['email'];
    //$email = mysqli_real_escape_string($conn, $filter_email);
    //$filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $select_users = mysqli_query($conn, "SELECT password FROM register WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        if ($pas = mysqli_fetch_array($select_users)) {
            if ($password == $pas["password"]) {

                $row = mysqli_fetch_assoc($select_users);
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                header('location:fishcode.php');
            } else {
                $message[] = 'wrong password';
            }
        }
     } else {
            $message[] = 'incorrect password or emails';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
            <h2>LOGIN</h2>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="email" required><br><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                <input type="submit" class="btn" name="Submit">
            </form>
         </div>
    </div>
    
</body>
</html>