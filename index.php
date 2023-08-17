<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<?php //print_r($_SESSION['cart'])


?>
<?php


$conn = mysqli_connect("localhost", "root", "", "projects");

if (isset($_POST['Add_To_Cart'])) {
    $itemname = $_POST['itemname'];
    $itemprice = $_POST['itemprice'];

    $query = "INSERT into my cart (itemname,itemprice) VALUES('$itemname','$itemprice')";
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


 
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="haddock.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Hadcock</h5>
    <p class="card-text">Price: Rs200</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="itemname" value="Haddcok">
  <input type="hidden" name="itemprice" value="200">
  </div>
</div>
</form>
  </div>
  <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="snakehead.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Snakehead</h5>
    <p class="card-text">Price: Rs400</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="Snakehead">
  <input type="hidden" name="Price" value="400">
  </div>
</div>
</form>
</div>
  <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="codfish.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">Codfish</h5>
    <p class="card-text">Price: Rs500</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="codfish">
  <input type="hidden" name="Price" value="500">
  </div>
</div>
</form>
  </div>
  <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="katla.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">katlafish</h5>
    <p class="card-text">Price: Rs600</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="katlafish">
  <input type="hidden" name="Price" value="600">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="kingcrab.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">kingcrab</h5>
    <p class="card-text">Price: Rs650</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="kingcrab">
  <input type="hidden" name="Price" value="600">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="prawn.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">prawn</h5>
    <p class="card-text">Price: Rs300</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="prawn">
  <input type="hidden" name="Price" value="300">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="snowcrab.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">snowcrab</h5>
    <p class="card-text">Price: Rs600</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="snowcrab">
  <input type="hidden" name="Price" value="600">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
      <div class="card">
        <img src="stonecrab.jpg" class="card-img-top">
  <div class="card-body text-center">
    <h5 class="card-title">stonecrab</h5>
    <p class="card-text">Price: Rs800</p>
    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_Name" value="stonecrab">
  <input type="hidden" name="Price" value="800">
  </div>
</div>
</form>
</div>


</body>
</html>
