<?php
session_start();
$link=mysqli_connect("localhost","varun","varun12");
mysqli_select_db($link,"squareone");
$statement = "product";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TQ_Bigeat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../main.css">
  <script src="../main.js"></script>
</head>

<body> 
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" onClick="openNav()">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
        <a class="navbar-brand" href="../menu_1.php">
          <span class="glyphicon glyphicon-home"></span>
        </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">
            <img src="./tq1.png" alt="logo" style="width:30px;height:30px;">Tea Quotient</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span> Hi, User</a>
        </li>
        <li>
          <a href="../logout.php">
            <span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
	<h2> Tea Quotient</h2><br>
    <a href="#">BigEat</a>
    <a href="cold.php">Cold</a>
	<a href="hot.php">Hot</a>
  </div>
  <img src="./tq1.png" style="float:left; margin-left:470px; width:8%; height:8%;"/>
<h1 style="margin-right:470px">Tea Quotient</h1>
<p id="logo1" style="margin-right:470px">EAT.MEET.GREET</p>
<hr>
<div class="container" id="main">
<div class="row">
<?php
$res=mysqli_query($link,"select * from {$statement} where product_category='bigeat'");
while($row=mysqli_fetch_array($res))
{
?>
      <div class="bg-primary card col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <img src="../../admin/<?php echo $row["product_image"]; ?>" alt="Avatar" class="food" height="100px" width="220px" />
        <hr>
        <div class="container1">
          <h4><?php echo $row["product_name"]; ?></h4>
          <p>Price:- Rs.<?php echo $row["product_price"]; ?></p>
            <a href="../product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
        </div>
		</div>
<?php
}
?>
</div>
	<div id="snackbar1">Added to cart</div>
	<div id="snackbar2">Add quantity first</div>
  </div>
</body>
</html>