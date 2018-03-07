<?php require_once 'actions/db_connect.php'; ?>

 

<!DOCTYPE html>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>tables</title>


 

    <style type="text/css">
    body{
        background-color: #E8E8E8;
    }

        .manageUser {

            width: 100%;
            margin: auto;
        }

    .parallax {
    /* The image used */
    background-image: url("https://az616578.vo.msecnd.net/files/2016/04/24/635970608044107061-368620822_maxresdefault.jpg");
    box-shadow: 0 5px 5px 0     rgb(144,0,0), 0 10px 10px 0 rgba(0, 0, 0, 0.2);

    /* Set a specific height */
    min-height: 550px; 
    width: 80%;
    margin-left: 150px;
    margin-top: 10px;

    /* Create the parallax scrolling effect */
    b
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 5px;

}
        table {

            width: 100%;
            height: 100%;
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
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Caffe Joke</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" class="btn btn-lg btn-default" style="color:rgb(144,0,0)">Sign in</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="parallax">
</div>
 
<div class="container">
<div class="manageUser">


      <h1>FREE tables  </h1 >

    <table class="table-striped " style="box-shadow:3px 3px 0 rgb(232,232,232), 0 10px 10px 0 rgba(0, 0, 0, 0.19); color:black;font-size:15px; " cellspacing="0" cellpadding="0">

        <thead>

            <tr>

                <th>Tables Number</th>

                <th>Status</th>

                
            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT count(active) as Numberoftable FROM tables WHERE active = 'available'";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>Number of Tables</td>

                         <td>".$row['Numberoftable']."</td>

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
</body>

</html>

