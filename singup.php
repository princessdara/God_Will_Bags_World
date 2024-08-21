<?php
session_start();

    include("connection.php");
    include("functions.php");


        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
            {

                //save to database
                $user_id = random_num(20);
                $query = "insert into users  (user_id,user_name,password) values ('$user_id','$user_name','$password')";
                
                mysqli_query($con, $query);

                header("Location: log.php");
                die;
            }else
            {
                echo "Please enter some valid information!";
            }
        }
    ?>



<!DOCTYPE html>
    <html >
    <head>
        <title>God Wills Bags World || Order</title>
        <link rel="stylesheet" href="singup.css">
        <link rel="shortcut icon" href="logo.jpg" type="image//x-ico">
    </head>
    <body>
        ok
        <header style="background: whitesmoke; ">
            <img src="logo.jpg" alt="" height="60px" style="border-radius:100%; ">
            <h2 class="logo">God Wills Bag World</h2>
            <h2 style="color: peru;">Buy Different types of bags here !!!!</h2>
        </header>

        <h1><marquee behavior="live" direction="live" style="color: black; ">Thank You For Contacting us !!!!!!</marquee></h1>
        
        <div class="wrapper">
<span class="icon-close"><ion-icon name="close"></ion-icon></span>
        
<div class="form-box register">
                <h2>Registration</h2>
                <form action="#" method="post">
                <div class="input-box">
             <span class="icon"><ion-icon name="person"></ion-icon></span> 
             <input id="text" type="text" name="user_name" required>
             <label>Type of bag to order</label>
             </div>
              
             <div class="input-box">
                 <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
              <input id="text" type="tel" name="password" required>
             <label>Phone number / Whatsapp number</label>    
                 </div>
          <div class="remember-forget">
          <label><input type="checkbox" required>I agree to the terms & conditions</label>     
        </div>
      <button id="button" type="submit" class="btn">Register</button>
        
                </form>
            </div>


        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>

