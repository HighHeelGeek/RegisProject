<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($conn);

// connect to database 
$conn = mysqli_connect('localhost', 'Kristin', '', 'javahobbit');

//check connection
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
}

?>
    
<!DOCTYPE html>

<html>    
<title>
    Java Hobbit Landing Page
</title>
<head>
    <meta charset="utf-8">
    
    <link href="style.css" rel="stylesheet" type="text/css">
        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
            
</head>
<body>
    <div class="nav">
        <a class="active" href="index.php">Home</a>
        <a href="account.html">Account</a>
        <a href="signup.html">SignUp</a>
        <a href="products.html">Products</a>
        <a href="sales.html">Specials & Sales</a>
        <a href="cart.html">Cart</a>
        <a href="AboutUs.html">About US</a>
        <a href="https://boyerscoffee.com" target="_blank">Boyers Coffee</a>
        <a href="https://dryadtea.com/collections/all-tea" target="_blank">Dryad Tea</a>
    </div>
    <h1>
        Greetings, <?php echo $user_data['user_name'];?>
    </h1>	
    <h2>
        
    </h2>
         
    <img src="2cupsandlilac.jpg" alt="two cups of cappuccino diagonally sitting across from one another, with lavender lilac flowers laid between them">
    
</body>
    <br>
    <br>
    <br>
<footer>
    <h5>Java Hobbit website created and maintained by Kristin Bailey 2022</h5>
</footer>
</html>    