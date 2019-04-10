<!DOCTYPE html>
<html>
<head>
  <title>Shopping.lk</title>
  <link rel="stylesheet" type="text/css" href="art1.css">
  <link rel="stylesheet" type="text/css" href="art_product.css">
  
 <!--  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/> -->
 <style type="text/css">
  
  .form1>input, select, textarea {
  
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-top: 7px;
}
  .form1>input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

.form1>input[type=submit]:hover {
  background-color: #45a049;
}
 </style> 
</head>
<body background="images/p3.jpg">
   <div id="wrapper">
      <div id="header">
       <div id="subheader">
         <div class="container">
           <p>shopping</p>
           <a href="">wishlist</a>
           <a href="cart.php">My cart</a>
           <a href="checkout.php">checkout</a>
           <a href="">Login</a>
         </div>
       </div>

      <div id="main-header">
        <div id="logo">
          <span id="ist">My</span><span id="iist">Shopping.lk</span>
        </div>
        <div id="search" >
          <form action="t1.php" method="POST">
            <input class="search-area" type="text" name="text" placeholder="search here">
            <input class="search-butn" type="submit" name="search" >
          </form>
         </div>

        <div id="user-menu">
          <li><a href="cart.php">Cart<img src="cart.jpg" width="50px" height="50px"></a></li>
          <li><a href="login.php">Login <img src="login.jpg" width="50px" height="50px"></a></li>
        </div>
      </div>
      </div>
      <div id="navigation">
        <nav  class="navbar navbar-inverse bg-inverse">
          <a href="main.php"> Home</a>
          <a href="menF.php"> Men Fashion</a>
          <a href="womenF.php">Women Fashion</a>
          <a href="shoes.php">Shoe</a>
          <a href="accesories.php">Accesories</a>
        </nav>
      </div>
      
   </div>

  