<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <header>


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" width="50px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
            
                    </ul>

                    <?php if(!isset($_SESSION['userId'])){ ?>
                        <form  action="includes/login.inc.php" method="post" class="d-flex" >
                            <input type="text" name="mailuid" class="form-control me-2" placeholder="Username/Email...">
                            <input type="password" name="pwd" class="form-control me-2" placeholder="Password...">
                            <button type="submit" name="login-submit" class="btn btn-dark">Login</button>
                        </form>
                    

                        <a href="signup.php" class="btn btn-light">Signup</a>

                    <?php }  else { ?>

                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit" class="btn btn-dark">Logout</button>
                    </form>

                    <?php } ?>

                </div>
            </div>
        </nav>

        <div>

            
        </div>
    
    </header>
    
