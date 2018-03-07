<?php require_once 'actions/db_connect.php';

?>
 <?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: home2.php");
  exit;
 }
 // select logged-in users detail
 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
 ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>   
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>stolovi</title>

    <style type="text/css">
        .manageUser {
            width: 50%;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

    </style>

</head>
<body>

     <style type="text/css">

        .manageUser {

            width: 100%;
            margin: auto;
        }

        body {
            
        }

        table {

            width: 100%;
            height: 250px;
            margin-top: 20px;
            color:grey;
            background: url("img/students_learning_platform.png");
        }

        h1 {
            text-align: center;
            color:silver;
            font-size: 30px;
            margin-bottom: 30px;
            margin-top:30px;
        }
        img {
            width: 100%;
        }

    </style>

 

</head>

<body>

 

<div class="manageUser">

    <a href="create.php"><button type="button">Add Table</button style="margin-left: 10px;margin-top: 10px; background-color: red;"></a>

        <h1>FREE TABLE 0</h1>
        <div class="container">
    <table class="table table-bordered  table-striped" style="box-shadow:3px 3px 0 rgb(232,232,232), 0 10px 10px 0 rgba(0, 0, 0, 0.19);" >

        <thead class="bg-primary">

            <tr>

                <th>Table</th>

                <th>Active</th>

                <th>Option</th>


            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tables WHERE active = 'available'";

            $result = $connect->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td>".$row['tables']." 

                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>


    <h1>NOT FREE 1</h1>
    <table class="table table-bordered  table-striped" style="box-shadow:3px 3px 0 rgb(232,232,232), 0 10px 10px 0 rgba(0, 0, 0, 0.19);" >

        <thead class="bg-primary">

            <tr >

                <th>Tables</th>

                <th>Active</th>

                <th>Option</th>

                

                

            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tables WHERE active = 'received'";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td>".$row['tables']." 
                        
                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>
</div>
</div>

 
 <a href="logout.php?logout">Sign Out</a>
</body>
</html>
