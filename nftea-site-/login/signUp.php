<?php 
   $db = new PDO('mysql:host=127.0.0.1;dbname=nftea;charset=utf8','root','');
   $query = $db->prepare('select * from user ');
   $data = $query->fetch();
   if(isset($_POST['submit'])){
	$UserName = $_POST['UserName'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$req = $db->prepare("insert into user (UserName,Email,Password) values(?,?,?)");
	$req->execute([$UserName,$Email,$Password]);
	header('location:/nftea-site-/login/login.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <div>
        <nav class="navbar navbar-expand-lg bg-black fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php" ><img src="../img/logonft.png" class="logo" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                  <li class="nav-item">
                  <?php if(!isset($_SESSION['Email'])){
      ?>
                <a class="nav-link" href="./login.php">Create</a>
           <?php } else { ?> 
            <a class="nav-link" href="../user/profil.php">Create</a>
            <?php }  ?> 
              </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Explorer
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../collection.php">collection</a></li>
                    <li><a class="dropdown-item" href="../nft.php"> NFT</a></li>
                    </ul>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <!--  <button class="btn btn-outline-success" type="submit">Search</button>-->
                  <form class="container-fluid justify-content-start">
                    <button class="btn btn-outline-success me-2" type="button"><a href="./signUp.php">Sign up</a></button>
                    <button class="btn btn-sm btn-outline-secondary" type="button"><a href="./login.php">Sign in</a></button>
                  </form>
                </form>
              </div>
            </div>
          </nav>
    </div>
    <!-- login -->
    <div class="wrapper fadeInDown mt-5">
    
        <form action="" method="POST"  class="sign">
        <h2  style="color:#fff;margin-bottom:10px;"> Sign UP </h2>
            <input type="text" id="UserName" class="fadeIn second" name="UserName" placeholder="Enter Your Name" style="background-color:#ffffff00;border-width:1px;"><br>
            <input type="email" id="Email" class="fadeIn third" name="Email" placeholder="Enter Your Email" style="background-color:#ffffff00;border-width:1px;width:227px;height:60px;border-radius:5px;border-color:white;text-align:center;margin-top:20px;margin-bottom:20px;"><br>
            <input type="password" id="Password" class="fadeIn third" name="Password" placeholder="Enter Your Password" style="background-color:#ffffff00;border-width:1px;width:227px;height:60px;border-radius:5px;border-color:white;text-align:center;"><br>
            <input type="submit" name="submit" class="fadeIn fourth" value="Sign Up!" style="margin-top:20px;margin-left:10px;">
          
          </form>
      </div>
      

        <!--footer-->
  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
            >
      <!-- Section: Social media -->
      <section
               class="d-flex justify-content-between p-4"
               style="background-color: #6351ce"
               >
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Company name</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                Here you can use rows and columns to organize your footer
                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">MDBootstrap</a>
              </p>
              <p>
                <a href="#!" class="text-white">MDWordPress</a>
              </p>
              <p>
                <a href="#!" class="text-white">BrandFlow</a>
              </p>
              <p>
                <a href="#!" class="text-white">Bootstrap Angular</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p>
                <a href="#!" class="text-white">Your Account</a>
              </p>
              <p>
                <a href="#!" class="text-white">Become an Affiliate</a>
              </p>
              <p>
                <a href="#!" class="text-white">Shipping Rates</a>
              </p>
              <p>
                <a href="#!" class="text-white">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr
                  class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px"
                  />
              <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
              <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
           >MDBootstrap.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
  </div>
  <!-- End of .container -->
            <script src="../js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>