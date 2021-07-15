<!DOCTYPE html>
<?php
session_start();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>website</title>

    <style>
/*.navbar {
  background-color: grey;
  padding: 0px;
  border: 1px solid black; 
}*/
.topnav {
  background-color: #333;
  overflow: hidden;
  margin-bottom: 0;
  margin-top: 0px;
/*  height: 30px;*/ 
}
.button {
  background-color: #333;
  color: white;
  margin: 10px;
  padding-top: 20px;
  
}
.header {
  padding: 5px; 
  height: 50px; 
  background-color: darkgray; 
  color:white;
}
.container {
content:"";
display:table;
clear:both;      
  }
.black {
color:#fff!important;
background-color:#000!important
}
.right {
  text-align:right!important
}
.left {
  text-align:left!important
}
#right {
  text-align:right!important
}
#left {
  text-align:left!important
}
.large {
    border-radius:32px;
}
.center {
    text-align:center!important
}
.center {
    margin-right: auto;
    margin-left: auto
}
.jumbo{
font-size:64px!important
}
.padding16{
    padding-top:16px!important;padding-bottom:16px!important;
}
.padding32{
    padding-top:32px!important;padding-bottom:32px!important;
}
.padding64 {
    padding-top:64px!important;padding-bottom:64px!important;
}
/*.third{
    float:left;width:100%
}*/
.paddinglarge{
    padding:12px 24px!important; float:left;
}
/*.hoverRed{
    color:#fff!important;background-color:#f44336!important
}*/
.border{
    border:1px solid #ccc!important
}
.border-grey{
    border-color:#616161!important
}
.searchpad{
    margin-right: 10px;
}
table, th, td, tr {
border: 1px solid lightslategrey;
border-collapse: collapse;
/*align-content: center;*/
padding: 5px;
color:black;
border-spacing: 40px 10px;


}
th, td {
background-color:lightblue;
padding: 10px;
color:black
}
td{
    padding: 10px;
    color:black;
}
tr:hover{
    background-color:lightblue;
}
menu{
    background-color:lightblue;
    color: black!important
}

header {
/*    font-family: Times new roman, Helvetica, sans-serif;*/
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
}
header{
    background-color:lightyellow 
}
body {background-color: coral;}
header, html, body, body div, span a {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
/*    background: transparent;*/
}
h1 {
    padding-left: 380px;
}
food:hover{
    background-color: lightskyblue;
}
#food:hover{
    background-color: lightskyblue;
}
#menu {
  border-collapse: separate;
  background-color: lightseagreen!important
}
#option {
    background-color: lightblue;
    color:black!important
}
option:hover {
    background-color: lightblue;    
}
option{
    background-color: lightblue;    
}
a.option:link, a.option:visited {
/*  background-color: transparent;*/
  color: black;
/*  padding: 15px 25px;*/
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a.option:hover, a.option:active {
/*  background-color: blue;*/
  margin: 0px;
  padding: 0px;
  outline: 0;
  vertical-align: baseline;
      font-size: 100%;
          border: 0;
  
}
</style>
<!--    <header style="background-color:lightyellow">-->
    
    <div id ="header">
 <nav class="topnav padding16"id="right">
<div id="left">
<a href="index.php" class="button">Company logo</a> 
<!--<a href="index.php"> <img src="Images/exampleImage.png" style="" alt="company logo" height="50" width="50"></a>-->
</div>
<div id="right"> 
<a href="index.php" class="button " >HOME</a> <?php     echo " | "; ?>
<a href="blank.php" class="button " >MENU</a> <?php     echo " | "; ?>
<a href="blank.php" class="button " >ABOUT</a> <?php     echo " | "; ?>
<a href="blank.php" class="button " >CHECKOUT</a> <?php     echo " | "; ?>
<a href="blank.php" class="button " >LOGIN</a> <?php     echo "  "; ?>
<input type="text" class="searchpad" placeholder="Search..">
</div>
</nav>

        </div>
    </head>
    <body>
<!--<div class="navbar">-->
<a href="blank.php">
    <img class="banner">
<!--    <img src="Images/foodbanner.png" alt="Food banner" height="200" width="1000">-->
    <img src="Images/background.jpg" alt="Food banner" height="200" width="500">
<!--    <img src="Images/various-asian-meals-on-rustic-260nw-1125066479.png" alt="Food banner" height="200" width="500">-->
    <img src="Images/713pIkbEsTZus.jpg-0.jpg" alt="Food banner" height="200" width="200">
    <img src="Images/fast-food-banner.jpg" alt="Food banner" height="200" width="750">
<!--     <img src="Images/Aurora.jpg" alt="Food banner">-->
     </a>
<!--</div>-->
<br/> 


<!--<div id="menu" class="container black large padding64">-->
<!--<h1 class="center jumbo padding32">THE MENU</h1>-->
<!--<div class=" border border-grey">-->
<br/>
<table id="options" class="center menu ">
        <td id="food"><a href="blank.php" class="option" style="color:black; font-weight:bold"id="link"><div class="menu third paddinglarge ">Pizza</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge ">Pasta</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge">Western</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge ">Japanese</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge ">Korean</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge ">Chinese</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge">Starters</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge">Sides</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge">Desserts</div></a></td>
        <td id="food"><a href="blank.php" style="color:black; font-weight:bold"><div class="menu third paddinglarge">Drinks</div></a></td>
</table>
</div>  
<h1 class="left">Popular choice</h1>
<table>
<table id="menu" class="center ">
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
</table>
</table>
<br/>
<h1 class="left">Starters</h1>
<table id="menu" class="center ">
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
</table>
<br/>
<h1 class="left">Best value</h1>
<table id="menu" class="center ">
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
    <td id="food"><a href="blank.php" class="option"><div class="food paddinglarge ">Cheese Sticks<br/><img src="Images/mozzarella-cheese-sticks.jpg" alt="cheese sticks" height="90" width="140"><br/>$4.50</div></a></td>
</table>
<br/> 
<footer class="topnav padding16">
    <span ><a href="index.php" class="button left">Company logo</a>
     <p class="center"style="color:white">Delivery Hotline: 94839824</p></span>
</footer>
   
        <?php
        // put your code here
        ?>
    </body>
</html>
