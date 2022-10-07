<?php

session_start();

    include("connections.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city_zip = $_POST['city_zip'];

        if(!empty ($user_name) && !empty($password) && !is_numeric($user_name) && !empty($first_name) && !empty($last_name) && !empty($phone_number) && !empty($email) && 
        !empty($address) && !empty($city_zip))
        {
            // save to database
            $user_id = rand(20);
            $query = "insert into users (user_id, user_name, password, first_name, last_name, phone_number, email, address, city_zip), 
            values ('$user_id', '$user_name', '$password', '$first_name', '$last_name', '$phone_number', '$email', '$address', '$city_zip')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
            }else
            {
                echo "Please enter some valid information!";
            }
        }
   

?>

