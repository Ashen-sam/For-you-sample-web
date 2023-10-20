<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script defer src="products.js"></script>
    <script defer src="app.js"></script>
      <!--header section with 2 navbars-->
      <div id="header" class="header-1">
        <!--navbar-1-->
        <div class="navbar-icon">
          <img src="images/4ulk.png" alt="" />
        </div>

        <div class="search">
          <!--Search bar-->
          <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search items">
            <button class="bx bx-search-alt-2" type="submit" name="submit-search"></button>
          </form>
          
        </div>
        <div class="navbar-list">
          <ul class="list">
            <li>
              <a href="#hero"> &nbsp;<i class="bx bx-user-plus"></i></a>
            </li>
            <li>
              <a href="#hero"><i class="bx bx-cart-add"></i> &nbsp; </a>
            </li>
          </ul>
        </div>
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div class="header-2">
        <!--navbar-2-->
        <div class="navbar-list">
          <ul class="list" id="list-2">
            <li >
              <a  id="active-home" href="Home.php">Home</a>
            </li>
            <li >
              <a id="active" href="HomeAppliance.php"><i class="bx bxs-devices"></i> Home Appiences</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="bx bx-laptop"></i> Security</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="bx bx-headphone"></i> Sanitary</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
            <li>
              <a href="Education.php"><i class="bx bx-tv"></i> Education</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="bx bxs-camera"></i> Energy Saving</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="bx bx-hdd"></i> Entertaintment</a>
              <ul id="dropdown" class="dropdown">
                <!--dropdown-menu-->
                <li><a href="#">Iphone15</a></li>
                <li><a href="#">Iphone12</a></li>
                <li><a href="#">Iphone11</a></li>
                <li><a href="#">Ipad 8th</a></li>
                <li><a href="#">Ipad pro</a></li>
                <li><a href="#">Mac</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

</head>
<body>
    