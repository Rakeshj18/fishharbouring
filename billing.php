<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "projects");

if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    $query = "INSERT into billing (fullname, email, address, phone, city, state, zipcode) VALUES('$fullname','$email','$address','$phone','$city','$state','$zipcode')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
      
        $_SESSION['status'] = "entered successfully";
        header("location: billing.php");
    }else{
      $_SESSION['status'] = "failed";
      header("location: billing.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url("payment.jpg");
  background-size: cover;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Responsive Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">

    <?php
    if(isset($_SESSION['status'])){
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
    }
    ?>
      <form action="" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="name@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="address" required>
            <label for="phone"><i class="fa fa-address-card-o"></i> phone</label>
            <input type="text"  name="phone" placeholder="phone" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">Screenshot of payment</label>
                <input type="file" id="state" name="state" placeholder="upload Screenshot here " required>
              </div>
              <div class="col-50">
                <label for="zip">Amount</label>
                <input type="text" id="zip" name="zipcode" placeholder="quantity x price" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
          <img src="qr.jpg" alt="qr code">
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="submit" class="btn">
      </form>
    </div>
  </div>

</div>

</body>
</html>
