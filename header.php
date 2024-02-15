<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&display=swap" rel="stylesheet">
    <style>
   button   {
    cursor: pointer;
    margin-left: 10px;
  }
  button:active {
    
    transform: scale(1.1) !important; 
    background-color: #fcfc0b !important; 
    color: black !important;
  }
    </style>
</head>
<body>

 <!-- The navigation start  -->
  <nav class="row align-content-center" id="nav">

    <!-- logo and the humburger menu -->

    <div class="col-lg-1 col-3 col-sm-1 d-flex justify-content-evenly ">
        <div class="menu-hum ">
               <div class="hmenu-line"></div> 
               <div  class="hmenu-line" ></div>
               <div  class="hmenu-line"></div>
        </div>
    </div>

    <div class="logo col-lg-3 col-5 col-sm-3"><a href="index.html">  ElectroHub</a></div> 

    <!-- adding icon form xsm screen size -->
    <div class="col-4 d-flex d-sm-none d-md-none d-lg-none d-xxl-none">
        <img src="img/person-fill.svg" alt="login option" class="navbar-menu-icon col-6">
        <img src="img/chat-fill.svg" alt="chat with customer" class="navbar-menu-icon col-6">
    </div>
      
    <!-- logo and the humburger menu end  -->

    <!-- search box start  -->

    <div class="col-lg-3 col-10 col-sm-6 ">
         <div class="serach d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <div id="search-icon"><img src="img/search (1).svg" alt="search icon"></div>
         </div>
    </div>
    <!-- search box end -->

    <!-- nav menu start  -->
    <div class="col-lg-5  col justify-content-evenly  d-none d-sm-none d-md-none d-lg-flex align-content-center">
         <div class="navbar-menu d-flex">
         <a href="header.php"><p> Customer <br>services</p></a> 
            <img src="img/chat-fill.svg" alt="img of the svg" class="navbar-menu-icon">

         </div>
         <div class="navbar-menu d-flex" >
            <p>Stores</p>
            <img src="img/geo-alt-fill.svg" alt="img of the location" class="navbar-menu-icon">
         </div>
         <div class="navbar-menu d-flex">
            <p><a href="selecteditems.php">Shopping carts</a></p>
            <img src="img/basket.svg" alt="the shopping cart" class="navbar-menu-icon">
         </div>
         <div class="navbar-menu d-flex">
            <p><a href="login.php">login</a></p>
            <img src="img/person-fill.svg" alt="the user login icon" class="navbar-menu-icon">
         </div>
    </div>
    <!-- nav menu end  -->

    <!-- smaller screen nav menu  -->
    <div class="col-2  d-flex d-sm-flex d-md-flex d-lg-none d-xxl-none"> 
      <img src="img/basket.svg" alt="the shopping basket" class="navbar-menu-icon">
      <img src="img/person-fill.svg" alt="login person icon" class="d-none d-sm-flex d-md-flex navbar-menu-icon">
      <img src="img/chat-fill.svg" alt="customer service" class="d-none d-sm-flex d-md-flex navbar-menu-icon">
    </div>
    <!-- smaller screen nav menu end  -->
  </nav>