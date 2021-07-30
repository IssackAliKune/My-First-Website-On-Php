<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/format.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 reg">
            <h1 class="x text-center text-capitalize text-primary"><strong>Join here</strong></h1>
            <h3 class="x text-info text-center">Enter your details here to become part of the dobis</h3>
            <form action="register_handler.php" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label class="font" for="">Name</label><br>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label class="font" for="">Residence</label><br>
                    <input type="text" class="form-control" name="residence" required>
                </div>
                <div class="form-group">
                    <label class="font" for="">Contact Number</label><br>
                    <input type="text" class="form-control" name="contact" required>
                </div>
                <div class="form-group">
                    <label class="font" for="">Your profile picture</label><br>
                    <input type="file" class="form-control" name="fileToUpload" required>
                </div>
                <input type="submit" value="Register"  class="btn btn-info" name="btn_reg">
                <a href="index.html" class="btn btn-info">Home</a>
                <br><br>

            </form>
        </div>
    </div>
</div>
</div>


</body>
</html>
