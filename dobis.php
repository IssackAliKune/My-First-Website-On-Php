<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobis</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body style="background-color: #9db3db">

<a href="index.html" class="btn btn-secondary btn-block">Home</a>
<h1 class="text-secondary text-center">DOBIS</h1>
<div class="row">
    <?php
    require_once "db_connection.php";

    $select_query = "select * from dobis order by id desc ";
    $dobis = mysqli_query($connection,$select_query);
    while ($row = mysqli_fetch_assoc($dobis)){
        extract($row);
        echo "
            <div class='card' style='width:390px;margin-left: 5px;margin-right: 5px;margin-bottom: 15px;'>
                <img class='card-img-top' src='profile_pictures/$profile_picture' alt='Card image' style='width:100%;height: 50%'>
                <div class='card-body'>
                    <h4 class='card-title'>$name</h4>
                    <p class='card-text'>$residence</p>
                    <p class='card-text'>$phone_number</p>
                    <a href='#' class='btn btn-primary stretched-link'>Hire this professional</a>
                </div>
            </div>
        ";
    }
    ?>
</div>
<!--<table class="table table-hover table-primary">-->
<!--    <tr>-->
<!--        <th>Name</th>-->
<!--        <th>Residence</th>-->
<!--        <th>Phone Number</th>-->
<!--    </tr>-->
<!---->
<!--    --><?php
    //Connect to the database
//    require_once "db_connection.php";
//    //Prepare the select query
//    $select_query="SELECT * FROM `dobis`";
//    //Finally fetch the products by use of mysql_query
//    $dobis=mysqli_query($connection, $select_query);
//    //Loop through the fetched products to display them one by one
//    while ($row=mysqli_fetch_assoc($dobis)){
//        //Extract all the rows and print them one by one
//        extract($row);
//        echo"
//       <tr>
//           <td>$name</td>
//           <td>$residence</td>
//           <td>$phone_number</td>
//       </tr>
//
//         ";
//
//    }
//
//
//    ?>
<!---->
<!---->
<!--</table>-->

</body>
</html>

