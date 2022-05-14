
<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="viewstyle.css">
  </head>
  <body>

<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #d1c093; ">

    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="Images/logo.png" alt="logo" id="logo">
    </a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#coll" style="border-color: white;">
        <span class="navbar-toggler-icon navbar-light" style="background-color: white;"></span>
    </button>

    <!-- Links -->
    <div class=" navbar-collapse collapse" id="coll">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="#" style="color: white; font-weight: bold; font-size: 17px;">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view-products-page.php" style="color: white; font-weight: bold; font-size: 17px;">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white; font-weight: bold; font-size: 17px;">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white; font-weight: bold; font-size: 17px;">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<!-- PHP -->
<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <?php

        if (!empty($_SESSION['name']) && !empty($_SESSION['pricee']) && !empty($_SESSION['descriptions'])) {
            $_SESSION['name'];
            $_SESSION['pricee'];
            $_SESSION['descriptions'];
            $_SESSION['photo'];
            $arr1 = explode("<br>", $_SESSION['name']);
            $arr2 = explode("<br>", $_SESSION['pricee']);
            $arr3 = explode("<br>", $_SESSION['descriptions']);
            $arr4 = explode("<br>", $_SESSION['photo']);
            for ($i = 0; $i < count($arr1) - 1; $i++) {
                echo ('<div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions"> <img src="images/'.$arr4[$i].'" class="card-img img-fluid" alt="Image" id="pimage"> </div>
                    </div>
                    <div class="card-body bg-light text-center">
                        <div class="mb-2">
                            <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arr1[$i] . '</h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                        </div>
                        <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                        <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                        <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                    </div>
                </div>
            </div>');
            }
        } else {
            echo ('<div class="container" id="error"> <h2>There are no products to display!!! </h2></div>');
        }
        ?>
    </div>
</div>





<!-- PHP -->













<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>

  </body>
</html>
