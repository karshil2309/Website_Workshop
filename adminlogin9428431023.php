<?php
    session_start();
    if (!empty($_SESSION['email']) && !empty($_SESSION['pass']))

  {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span> Log Out</a></li> -->

                </ul>
            </div>
        </div>
    </nav>

    <body>

        <html>
        <center>
            <h1>Registered Entry</h1>
        </center>
        <br>
        <br>


        </html>
        <?php
// session_start();
// if (!empty($_SESSION['username']) && !empty($_SESSION['password']))

  // {
    $sql = "select * from enrform;";
    $con = mysqli_connect("localhost","root","","id8362320_optimus");
    $result = mysqli_query($con, $sql);
    echo "<table border='2px' align='center' padding='150px 150px 150px'>";
    echo "<tr><th><center>Full Name</center></th><th>Email</th><th>Contact</th><th>Timing</th></tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["select2"]."</td>";
      
        echo "</tr>";
    }
    echo "</table>";




?>
        <a href="adminlogout.php">Logout</a>

        <?php

}
else
{
  header('location:adminlogin.php');
}

?>