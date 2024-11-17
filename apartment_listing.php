<?php
$con = new mysqli("localhost", "root", "", "database1");

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $action = $_POST['action'];
    $id = $_POST['id'] ?? '';  //The ?? operator in PHP is called the null coalescing operator. It is used to check if a variable exists and is not null. 
    $image = $_POST['image'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $overview_page = $_POST['overview_page'];
    $bedrooms = $_POST['bedrooms'];
    $bath = $_POST['bath'];
    $sqft = $_POST['sqft'];

    if ($action == 'add') {

        $con->query("INSERT INTO items (image, price, description, overview_page, bedrooms, bathrooms, sqft) VALUES ('$image', '$price', '$description', '$overview_page', '$bedrooms', '$bathrooms', '$sqft')");
    
    } elseif ($action == 'update') {
        
        $con->query("UPDATE items SET image='$image', price='$price', description='$description', overview_page='$overview_page', bedrooms='$bedrooms', bathrooms='$bath', sqft='$sqft' WHERE id=$id");
    
    } elseif ($action == 'delete') {

        $con->query("DELETE FROM items WHERE id=$id"); //The WHERE clause ensure that only the record with a specific id ($id:1,2,3,4,...) is deleted. if id=5, that row will be deleted
    
    }
}

// Fetch items from the database
$result = $con->query("SELECT * FROM items");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel='stylesheet' type='text/css' media='screen' href='header.css'>
    <script src='header.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #list{
            width: 35px;
        }
    </style>
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
            <li><a href="#">LIST</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact1.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="mobnav">
        <button class="menu" onclick="anim()">MENU<i class="fa-solid fa-bars"></i></button>
        <ul class="nav2">
            <br><br><br>
            <li><a href="items.php">Home</a></li>
            <li><a href="#">LIST</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact1.php">Contact Us</a></li>
        </ul>
    </div>';
}else{
        echo'
<h1 class="header">ONLINE APARTMANT</h1>
    <div>
        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact1.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="mobnav">
        <button class="menu" onclick="anim()">MENU<i class="fa-solid fa-bars"></i></button>
        <ul class="nav2">
            <br><br><br>
            <li><a href="#">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="contact1.php">Contact Us</a></li>
        </ul>
    </div>';
    }

    ?>
    <div id="popup">
        <p>Congragulations!<br>You won a *#%</p>
        <img src="images/congratulations.gif" alt="gif" class="gif">
        <button onclick="closePopup()">Close</button>
    </div>

<h2>Add New Item</h2>
<form method="POST">
    <input type="hidden" name="action" value="add"> <!--here is the action "add"-->
    Image URL: <input type="text" name="image"><br>
    Price: <input type="text" name="price"><br>
    Description: <input type="text" name="description"><br>
    Overview Page: <input type="text" name="overview_page"><br>
    <input type="text" name="bedrooms" id="list"> 
    <input type="text" name="bath" id="list"> 
    <input type="text" name="sqft" id="list"> 
    <button type="submit">Add Item</button>
</form>


<h2>Existing Items</h2>
<table border="1">
    <tr>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php 
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td><img src="' . $row['image'] . '" width="100"></td>
            <td>' . $row['price'] . '</td>
            <td>' . $row['description'] . '</td>
            <td>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="update">  <!-- Here is the action "update" -->
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    Image: <input type="text" name="image" value="' . $row['image'] . '"><br>
                    Price: <input type="text" name="price" value="' . $row['price'] . '"><br>
                    Description: <input type="text" name="description" value="' . $row['description'] . '"><br>
                    Overview Page: <input type="text" name="overview_page" value="' . $row['overview_page'] . '"><br>
                    <input type="text" id="list" name="bedrooms" value="' . $row['bedrooms'] . '">
                    <input type="text" id="list" name="bath" value="' . $row['bathrooms'] . '">
                    <input type="text" id="list" name="sqft" value="' . $row['sqft'] . '">
                    <button type="submit">Update</button>
                </form>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="delete">  <!-- Here is the action "delete" -->
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>';
    }
    ?>
</table>

</body>
</html>
