<!DOCTYPE html>
<html>

<head>

    <title>Page Title</title>

    <link rel='stylesheet' type='text/css' href='contact.css'>
    <script src='contact.js'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='header.css'>
    <script src='header.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php 
session_start();
$username = "";

if (isset($_SESSION["username"])) {
    echo'
<h1 class="header">ONLINE APARTMANT</h1>
    <div>
        <ul class="nav">
            <li><a href="items.php">Home</a></li>
            <li><a href="apartment_listing.php">LIST</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div id="mobnav">
        <button class="menu" onclick="anim()">MENU<i class="fa-solid fa-bars"></i></button>
        <ul class="nav2">
            <br><br><br>
            <li><a href="items.php">Home</a></li>
            <li><a href="apartment_listing.php">LIST</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>';
}else{
        echo'
<h1 class="header">ONLINE APARTMANT</h1>
    <div>
        <ul class="nav">
            <li><a href="items.php">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div id="mobnav">
        <button class="menu" onclick="anim()">MENU<i class="fa-solid fa-bars"></i></button>
        <ul class="nav2">
            <br><br><br>
            <li><a href="items.php">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>';
    }

    ?>
    <div id="popup">
        <p>Congragulations!<br>You won a *#%</p>
        <img src="images/congratulations.gif" alt="gif" class="gif">
        <button onclick="closePopup()">Close</button>
    </div>

    <div class="div1">
        <p class="heading">Get in touch</p>
        <p class="dis">We're here to help! Whether you have questions, feedback, or need support, our team is ready to
            assist you.
            Please reach out to us via the contact form below, and we’ll get back to you as soon as possible. You can
            also
            connect with us directly through email or phone during business hours. We look forward to hearing from you
            and ensuring
            your experience with us is smooth and enjoyable.</p>
        <br><br>
        <div class="ul1">
            <div class="ul1">
                <div><a href="#"><img src="images/phone.png" id="img"></a></div>
                <div class="pp">
                    <p>Call<br>+94 123 123 123</p>
                </div>
            </div>
            <div class="ul1">
                <div><a href="#"><img src="images/email.png" id="img"></a></div>
                <div class="pp">
                    <p>E-mail<br>Info@example.com</p>
                </div>
            </div>
            <div class="ul1">
                <div><a href="#"><img src="images/address.png" id="img"></a></div>
                <div class="pp">
                    <p>Address<br>lorem lorem</p>
                </div>
            </div>
        </div>
        <div class="follow">Follow us:</div>
    </div>
    <form id="form1" onsubmit="validateForm(event)" method="post" action="contact.php">
        <br>
        <p>Drop a message</p>
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Name" required>
        <label for="phone">Phone</label>
        <input type="text" id="phone" placeholder="Phone Number" required><br><br>
        <label for="email">E-mail</label><br>
        <input type="text" id="email" style="width: 425px;" placeholder="Someone@gmail.com" required><br><br>
        <label for="message">Message</label><br>
        <textarea id="message" style="width: 450px; height: 150px;" placeholder="Your message..."></textarea><br><br>
        <button type="submit">Send</button>
        <div id="error"></div>
        <br><br>
    </form>
    <div id="popup1">
        <div id="popupin">This website protect your privacy and ensure to protect your credentials. Do you want to
            conform your request?</div>
        <button id="btn1" onclick="popup2()">OK</button>
        <button id="btn2" onclick="hidepopup()">Cancel</button>
    </div>
    <div id="popup2">
        <div id="popupin">Your request was sent successfully...
        </div>
        <button id="btn3" onclick="hidepopup2()">OK</button>
    </div>
</body>

</html>