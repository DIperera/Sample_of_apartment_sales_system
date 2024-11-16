<?php
$con = new mysqli("localhost", "root", "", "database1");
$result = $con->query("SELECT * FROM items");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Items</title>
    <link rel="stylesheet" href="items.css">
    <link rel='stylesheet' type='text/css' media='screen' href='header.css'>
    <script src='header.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 
<h1 class="header">ONLINE APARTMANT</h1>
    <div>
        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div id="mobnav">
        <button class="menu" onclick="anim()">MENU<i class="fa-solid fa-bars"></i></button>
        <ul class="nav2">
            <br><br><br>
            <li><a href="#">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div id="popup">
        <p>Congragulations!<br>You won a *#%</p>
        <img src="images/congratulations.gif" alt="gif" class="gif">
        <button onclick="closePopup()">Close</button>
    </div>

<h2>Apartment page</h2>
<div class="apartment">

<?php

while ($row = $result->fetch_assoc()) { 
    echo'
    <div class="a1">    <!-- Changed id="a1" to class="a1" -->
        <a href="'. $row['overview_page'].'">    <!--here "=" is an alternative for "php echo"-->
            <img class="img1" src="'. $row['image'].'" width="305">
        
            <div class="details">
                <p id="price1">Price: '.$row['price'] .'</p>
                <p class="p1" id="heading1">Lorem ipsum dolor</p>
                <p>Description: '. $row['description'] .'</p>
            </div>
            <ul class="c1">
                <li><img src="images/bath.png" width="15px"> '. $row['bedrooms'] .' bedroom</li>
                <li><img src="images/bath.png" width="15px"> '. $row['bathrooms'] .' bath</li>
                <li><img src="images/ruler.webp" width="15px"> '. $row['sqft'] .' sqft</li>
            </ul>
        </a>   
    </div>
';} //";" is mandatory
?>
</div>

</body>
</html>
    