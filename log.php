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

                //read from database
                $query = "select * from users where user_name = '$user_name' limit 1";
                $result = mysqli_query($con, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {

                        $user_data = mysqli_fetch_assoc($result);
                      
                        if($user_data['password'] === $password)
                        {

                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;
                        }
                    }
                }
            
                echo "wrong username or  password!";
            }else
            {
                echo "Please enter some valid information!";
            }
        }

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>God Wills Bags World</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image//x-ico">
        <link rel="stylesheet" href="log.css">
    </head>
    <body style="Background: black; color: white; text-align: center; margin: auto; margin-top: 200px;">
        <h1><marquee behavior="live" direction="live">Thank you Your Request Is Being Process</marquee></h1>
        <h2>Thank you for contacting God Wills Bag World</h2>
            </div>


            
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>