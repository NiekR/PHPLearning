

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="header mt-5">
        <div class="container">
<!--            <a href="#">-->
<!--                <img src="#" alt="#">-->
<!--            </a>-->

            <ul class="d-flex" >
                <li class="mr-4" ><a href="index.php">Home</a></li>
                <li class="mr-4" ><a href="#">Portfolio</a></li>
                <li class="mr-4" ><a href="#">About me</a></li>
                <li class="mr-4" ><a href="#">Contact</a></li>
            </ul>

            <div class="form">

                <!-- Login -->
                <form action="includes/login.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="mailuid" placeholder="Your e-mail">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="password" name="pwd" placeholder="Your password" >
                    </div>

                    <div class="form-group">
                        <button class="btn btn-danger" type="submit" name="login-submit">Login</button>
                    </div>
                </form>

               <div class="other mt-5">
                   <a class="btn btn-warning" href="signup.php">Sign up!</a>

                   <!-- Logout -->
                   <form action="signup.php" method="post">
                       <div class="form-group mt-3">
                           <button class="btn btn-danger" type="submit" name="logout-submit">Logout</button>
                       </div>
                   </form>
               </div>

            </div>
        </div>

    </div>

</body>