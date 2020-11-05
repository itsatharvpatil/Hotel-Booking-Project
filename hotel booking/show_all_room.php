<?php
include_once 'admin/include/class.user.php'; 
$user=new User();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

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
            text-align: center;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
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
            div{
                width: 90%;
                padding: 10px;
                margin-left: 5%;
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
      
      
        
        
        
        <?php
        
        $sql="SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['room_cat']."</h4><hr>
                                <h6>Checkin: ".$row['checkin']." and checkout: ".$row['checkout']."</h6>
                                <h6>Name: ".$row['name']."</h6>
                                <h6>Phone: ".$row['phone']."</h6>
                                <h6>Booking Condition: ".$row['book']."</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href='edit_all_room.php?id=".$row['room_id']."'><button class='btn btn-primary button'>Edit</button></a>
                            </div>
                            
                    
                    
                         ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>

    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>