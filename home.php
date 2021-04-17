<?php
session_start();

?>



<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="navbar-brand text-uppercase text-white">
            <span class="clr">lakhwinder</span>
        </div>

        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active navbar-nav mr-5">
                <a class="nav-link text-white" href="registration.php">
                    Register now
                </a>
            </li>
            <br />
            <br />
            <li class="nav-item navbar-nav mr-5 ">
                <a class="nav-link text-white">
                    <i class=" fa fa-user" style="font-size:20px"></i> <?php echo  $_SESSION['first_name'], $_SESSION['last_name'];  ?>

                </a>
            </li>
            <br />
            <br />
            <li class="nav-item navbar-nav mr-5 ">
                <a class="nav-link text-white" href="login.php">
                    Log out
                </a>
            </li>
        </ul>
    </nav>


    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./burger.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Burger</h5>
                    <p class="card-text">We have different varieties of burger veg and non-veg .</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./pizza.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">pizzas</h5>
                    <p class="card-text">pizaas of our restaurant are very famous.</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./frenchfries.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">french fries</h5>
                    <p class="card-text">french fries are very famous fast foof of qou restaurant</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./noodles.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">noodles</h5>
                    <p class="card-text">It is the favourite fast food of our restaurant .</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./momos.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">momos</h5>
                    <p class="card-text">we have two varieties of momos veg and non-veg.</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./soup.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Soup</h5>
                    <p class="card-text">We have a different varietirs of soups available.</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./fried rice.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fried Rice</h5>
                    <p class="card-text">It is one of the most beautiful disches of out restaurant .</p>
                    <a href="order.php" class="btn btn-primary">order</a>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
