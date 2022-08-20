
<!DOCTYPE html> <html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KC-SHOP</title>
    <!--CSS style links start-->
   
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles-index.css">
    <link rel="stylesheet" href="../styles/styles.css">>

       
    <!--CSS style links END-->

</head>
 <body class="p-3 m-0 border-0 bd-example" >
    

<header>
<!--navbar start-->
<nav class="navbar bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">KC-shop</a>
        <!--top nav buttons--> 
        <button class="custom-btn btn-11">
          <a href="../page-template.html">WELCOME</a>
        </button>
        <!--top nav buttons-->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">KC-shop</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MY ACCOUNT</a>
              </li>

              

                  <li class="nav-item">
                     
                     <?php

               $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
               $row_count = mysqli_num_rows($select_rows);

               ?>
                        <a  href="cart.php" class="cart nav-link">cart <span><?php echo $row_count; ?></span> </a>
                     </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SHOP
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ladies</a></li>
                  <li><a class="dropdown-item" href="#">Men</a></li>
                  <li><a class="dropdown-item" href="#">Kids</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">UNISEX</a></li>
                </ul>
              </li>

               


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ADMIN
                </a>
                <ul class="dropdown-menu">
                  <li> <a class="dropdown-item" href="admin.php">add products</a></li>
                  <li> <a class="dropdown-item" href="products.php">view products</a></li>
                  <li> <a class="dropdown-item" href="checkout.php">Checkout</a></li>

                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
<!--navbar end-->
</header>

<!--SCRIPT start-->
<script src="../js/script.js"></script>
        <script src="../js/Jquery-3.6.0.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>     
<!--SCRIPT end-->
</body>
</html>