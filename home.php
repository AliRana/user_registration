<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<html>
<head>
<title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="style_home.css">
        <link rel="stylesheet" type="text/css" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

    <div class="container">


    <a class="float-right" href="logout.php"> LOGOUT </a>

    <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

    </div>
    <a href="index.html" class="hero-btn red-btn">Continue to Homepage</a>

</body>


</html>