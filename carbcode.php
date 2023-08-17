<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "projects");

if (isset($_POST['submit'])) {

    $crabtype = $_POST['crabtype'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $query = "INSERT into crab (crabtype, price, quantity) VALUES('$crabtype','$price','$quantity')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
      
        $_SESSION['status'] = "entered successfully";
        header("location: billing.php");
    }else{
      $_SESSION['status'] = "failed";
      header("location: fishcode.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
             background-color: powderblue;
        }
        img{
            height: 250px;
            width: 300px;
        }
        .top{
            
            position: absolute;
            left: 500px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    if(isset($_SESSION['status'])){
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
    }
    ?>
    <div class="top">
    <h1>SHOP CRAB</h1>
    <img src="snowcrab.jpg" alt="snow crab">
    <form action="" method="POST">
        <label for="">CRAB TYPE</label>
        <select name="crabtype" id="">
            <option value="Cod fish">COD FISH</option>
        </select><br><br>
        <label for="">PRICE</label>
        <select name="price" id="">
            <option value="275">Rs.275</option>
        </select><br><br>
        <label for="">QUANTITY</label>
        <select name="quantity" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        <input type="submit" name="submit" class="btn"><br>
    </form>
    <br><br>
    <img src="stonecrab.jpg" alt="stone crab">
    <form action="" method="POST">
        <label for="">CRAB TYPE</label>
        <select name="crabtype" id="">
            <option value="stone crab">STONE CRAB</option>
        </select><br><br>
        <label for="">PRICE</label>
        <select name="price" id="">
            <option value="750">Rs.750</option>
        </select><br><br>
        <label for="">QUANTITY</label>
        <select name="fishtype" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        <input type="submit" name="submit" class="btn"><br>
    </form>
    <br><br>
    <img src="kingcrab.jpg" alt="">
    <form action="" method="POST">
        <label for="">CRAB TYPE</label>
        <select name="crabtype" id="">
            <option value="katla fish">KING BRAB</option>
        </select><br><br>
        <label for="">PRICE</label>
        <select name="price" id="">
            <option value="200">Rs.200</option>
        </select><br><br>
        <label for="">QUANTITY</label>
        <select name="quantity" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        <input type="submit" name="submit" class="btn"><br>
    </form>
    <br><br>
  </div>
</body>
</html>