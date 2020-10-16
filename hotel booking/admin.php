<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-color: #ffffff;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0px;
            padding: 0px;
        }
        
        h4 {
            color: #ffbb2b;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
        header{
                background:#000000;
                height: 60px;
            }
            a{
                color:#ffffff;
                text-decoration: none;
            }
            ul li{
                list-style-type: none;
            }
            #left-nav{
                float:left;
            }
            #right-nav{
                float:right;
            }
            #right-nav li{
                float:left;
                display: inline-block;
                margin: 10px;
            }
            footer{
                clear: both;
                background-color: #000000;
                margin-top: 50px;
                text-align: center;
                padding: 10;
                color: #ffffff;
            }
            #logo{
                height: 40px;
                width: 40px;
            }
    </style>


</head>

<body>
    

        <header>
            <ul id="left-nav">
                <li class="active"><a href="index.php"><img src="images/logo.png" id="logo"></a></li>
            </ul>
            <ul id="right-nav">
                <li><a href="room.php">Rooms</a></li>
                <li><a href="reservation.php">Online Reservations</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </header>
        <div class="container">
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Add Room Category</a></li>
                    <li><a href="show_room_cat.php">Show All Room Category</a></li>
                    <li><a href="show_room_cat.php">Edit Room Category</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Book Now</a></li>
                    <li><a href="show_all_room.php">Show All Booked Rooms</a></li>
                    <li><a href="show_all_room.php">Edit Booked Room</a></li>
                </ul>
            </div>
           <div class="col-md-3"></div>
        </div>
        
        
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Add Manager</h4>
                <hr>
                <ul>
                    <li><a href="admin/registration.php">Add Manager</a></li>
 
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>

        







    </div>



    <footer style="clear: both;">
            &COPY:2020 by Book My Room Corp.
    </footer>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
