<?php

$user = "root";
$password = "";

$database = "projects";

$servername = 'localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

if($mysqli->connect_error) {
    die('connect error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

$sql = "SELECT * FROM fish ORDER BY fno";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;
        background-image: url('nr.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 10px;
  line-height: 45px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
table{
    position: absolute;
    left: 500px;
}
h2{
    text-align: center;
}
td{
    border: 1px solid black;
}
th,td{
    font-weight: bold;
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}
td{
    font-weight: lighter;
}
</style>
</head>
<body>

<div class="sidebar">
  <h1>ADMIN PAGE</h1>
  <a href="http://localhost/DBMS%20PROJECT/adminfish.php"><i class="fa fa-shopping-cart" ></i>FISH</a>
  <a href="http://localhost/DBMS%20PROJECT/admincrab.php"><i class="fa fa-user-circle"></i>CRAB</i>
</div>

<section>
    <h2>FISH</h2>
    <table>
        <tr>
            <th>fno</th>
            <th>fishtype</th>
            <th>price</th>
            <th>quantity</th>
        </tr>
        <?php
        while ($rows = $result->fetch_assoc()) {

            ?>
        <tr>
            <td><?php echo $rows['fno']; ?></td>
            <td><?php echo $rows['fishtype']; ?></td>
            <td><?php echo $rows['price']; ?></td>
            <td><?php echo $rows['quantity']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</section>

     
</body>
</html> 