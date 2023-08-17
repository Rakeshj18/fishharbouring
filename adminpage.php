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
</style>
</head>
<body>

<div class="sidebar">
  <h1>ADMIN PAGE</h1>
  <a href="http://localhost/DBMS%20PROJECT/adminfish.php"><i class="fa fa-shopping-cart" ></i>FISH</a>
  <a href="http://localhost/DBMS%20PROJECT/admincrab.php"><i class="fa fa-user-circle"></i>CRAB</a>
</div>

<div class="main">

     
</body>
</html> 