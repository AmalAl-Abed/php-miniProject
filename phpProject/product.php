
<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style=" margin-right: 900px; ">HOPE </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="view.php">Home <span class="sr-only">(current)</span></a>
     
      <a class="nav-item nav-link" href="product.php"> products</a>
      
    </div>
  </div>
</nav>

    <div class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="prod">Product Name: </label>
                <input type="text" class="form-control" id="prod" name="pname" Required>
            </div>
            <div class="form-group">
                <label for="pri">Price: </label>
                <input type="number" class="form-control" id="pri" name="price" Required>
            </div>
            
            <div class="form-group">
                <label for="pic">Product Picture: </label>
                <input type="file" class="form-control" id="pic" name="picture" accept="image/*" required>
                
            </div>

            <div class="form-group">
                <label for="desc">Description: </label>
                <textarea name="description" id="desc" cols="30" rows="10" class="form-control" Required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add" id="add"  >Add Item</button>

        </form>
        <br>
        

    </div>
    
    <div class="table-responsive" id="table-div">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Picture</th>
                </tr>
            </thead>
            <tbody id="info">
            <?php 
                
                if(isset($_POST['add'])){
                    $_SESSION['name'].=$_POST['pname'].'<br>';
                    $_SESSION['price'].=$_POST['price'].'<br>';
                    $_SESSION['desc'].=$_POST['description'].'<br>';
                    $_SESSION['img'].=$_POST['picture'].'<br>';
                    echo ('<tr><td>' . $_SESSION['name'] . '</td><td>' . $_SESSION['price'] . '</td><td>' . $_SESSION['desc'] . '</td><td>' . $_SESSION['img']. '</td></tr>');
                }
                // session_unset();
            ?>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">HOPE/a>
  </div>
  <!-- Copyright -->
</footer>


 
</body>

</html>