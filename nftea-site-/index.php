<?php 
session_start();
require './user/include/conexion.php'; ?>

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
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"/>

<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" 
rel="stylesheet"/>

<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg bg-light bg-black fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" ><img src="img/logonft.png" class="logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <?php if(!isset($_SESSION['Email'])){
      ?>
                <a class="nav-link" href="./login/login.php">Create</a>
           <?php } else { ?> 
            <a class="nav-link" href="./user/profil.php">Create</a>
            <?php }  ?> 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explorer
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="nft.php"> NFT</a></li>
                  <li><a class="dropdown-item" href="collection.php"> COLLECTION</a></li>
                  <li><hr class="divider"></li>
                  <li class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="checkbox" onclick="setDarkMode()">
                    <label class="form-check-label" for="chackbox" style="color:white">Dark Mode</label>
                  </li>

                 
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search items ,collections ,NFTs .." aria-label="Search">
            <!--  <button class="btn btn-outline-success" type="submit">Search</button>-->
              <!--  <button class="btn btn-outline-success" type="submit">Search</button>-->
              <form class="container-fluid justify-content-start">
                <?php if(!isset($_SESSION['Email'])){
      ?>
      <button class="btn btn-outline-success me-2" type="button"><a href="login/signUp.php">Sign up</a></button>
      <button class="btn btn-sm btn-outline-secondary" type="button"><a href="login/login.php">Sign in</a></button>
            
      <?php
      
      } else { ?> 
    <?php $req = $db->query("SELECT * FROM `user`");
                            while($data =  $req->fetch()):
                              if($data['Email']==$_SESSION['Email']){ ?>
                                <button class="btn btn-outline-success me-2" type="button"><a href="./user/profil.php"><?php echo $data['UserName'] ?></a></button>
                    
                            <?php  }
    ?> <?php endwhile; ?> 
                    
                    <button class="btn btn-outline-success me-2" type="button"><a href="login/logout.php">Déconnexion</a></button>
                    
                </a>
    <?php
      }
    ?>
                  </form>
            </form>
          </div>
        </div>
      </nav>
    </div>



    <!--sec part-->
    <div class="reception">
        <div class="rec">
          <h1 class="glow">NFTea.. Explore, collect and sell NFTs!</h1>
            <p>
          The world's first – and largest – digital marketplace for <br>
          crypto collectibles and non-fungible tokens (NFTs). Buy, sell <br>
          and discover exclusive digital items.<br></p>
          <button type="button" class="boutton" ><a href="./nft.php">All NFTs</a></button>

        </div>
        <div class="presentation">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <div class="items">
              <img src="./user/img/0cfd62fe6a96332a7c1762709117cdd8.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/0fd0fa63ff40ebc9f50873d14a043436.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/12dfc9997e737112205441b642cbda3e.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/e11bd8c8c53e473d1309943fbdb75724.jpg" id="img3" class="d-block w-100" alt="...">

            </div>
          </div>
          <div class="carousel-item">
                <div class="items">
              <img src="./user/img/adam.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/cool.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/emm.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/namirr.jpg" id="img3" class="d-block w-100" alt="...">

            </div>
          </div>
          <div class="carousel-item">
                <div class="items">
              <img src="./user/img/namir.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/jokar.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/zzz.jpg" id="img3" class="d-block w-100" alt="...">
              <img src="./user/img/adam.jpg" id="img3" class="d-block w-100" alt="...">

            </div>
          </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
        <!--statistiques part-->
        <div class="statistiques">
        <?php $reaq = $db->query("SELECT * FROM `user`");?>
          <div>+<?php echo $reaq->rowCount()?> Users<div class="stats">users on this plateform</div></div>
          <?php $reeaq = $db->query("SELECT * FROM `nft`");?>
          <div>+<?php echo $reeaq->rowCount()?> NFTS<div class="stats">NFTs on this plateform</div></div>
        </div>
    <!--third part-->
    <div class="please">
    <div class="Bcollections">     
       <div class="collections">
      <div>Hot collections</div>
      <div><button class="voir">voir tous</button></div>
     </div>
     <hr>
    <div class="hot-collections">
    <div class="half">
          <div class="upper">
            <div> collection</div>
            <div>Artiste</div>
          </div>
         
    <?php 
                        $req = $db->query(" SELECT *
                        FROM collection
                        INNER JOIN user
                        WHERE collection.UserId = user.UserId");
                        $i=0;
                        while($data =  $req->fetch()):
                        if($i<3){
                            
?>
                         
      <!--half left-->
        
          <!--line-->
          <div class="line">
            <!--image and name collection-->
            <div class="info">
              <!--image-->
            
            <!--name collection-->
            <div class="">
            <?= $data['NameColl'] ?>
            </div>
            </div>
            <!--name user-->
            <div class="name">
            <?= $data['UserName'] ?>
            </div>
            <!--nombre-->
            
          </div>
          
          <?php $i++;} endwhile; ?>
          
    </div>
 
  </div>
  </div>
  <div class="Bcollections">     
       <div class="collections">
      <div>BEST USERS</div>
      <div><button class="voir">voir tous</button></div>
     </div>
     <hr>
    <div class="hot-collections">
    <div class="half">
          <div class="upper">
            <div>Name </div>
            <div>email</div>
          </div>
         
    <?php 
                        $req = $db->query(" SELECT *
                        FROM collection
                        INNER JOIN user
                        WHERE collection.UserId = user.UserId");
                        $i=0;
                        while($data =  $req->fetch()):
                        if($i<3){
                            
?>
                         
      <!--half left-->
        
          <!--line-->
          <div class="line">
            <!--image and name collection-->
            <div class="info">
              <!--image-->
            
            <!--name collection-->
            <div class="">
            <?= $data['UserName'] ?>
            </div>
            </div>
            <!--name user-->
            <div class="name">
            <?= $data['Email'] ?>
            </div>
            <!--nombre-->
            
          </div>
          
          <?php $i++;} endwhile; ?>
          
    </div>
  
  </div>
  </div>
  </div>
  <!--fourth part-->
 
    <div class="pmchers">
      <div class="Mptext" ><p class="mptext">The most expensive NFT and the cheap one ,which<br> do you think is better ? ..<br>whatever you cn show us your creativity too ! </p>
      <button style="color:#fff"><a  href="./user/profil.php" >Create Your NFT</a></button>

    </div>
      <div class="nftCart">
        <div class="sousnftCart">
            <?php
    $query = $db->prepare('select * from nft WHERE Prix = (SELECT MAX(Prix) FROM nft)');
    $query->execute();
    foreach($query as $nft) {
      ?>
          <img src="./user/img/<?= $nft['imageNft']?>" style="height:200px;width:190px;border-radius:10px;">
          <div> <?php echo $nft['NameNft'];?></div>
          <div> <?php echo $nft['Prix'];?></div>
        </div>
      </div>
      <?php }?>
      <div class="vs">vs</div>
      <div class="nftCart" >
      <?php
    $query = $db->prepare('select * from nft WHERE Prix = (SELECT MIN(Prix) FROM nft)');
    $query->execute();
    foreach($query as $nft) {
      ?>
        <div class="sousnftCart">
          <img src="./user/img/<?= $nft['imageNft']?>" style="height:200px;width:190px;border-radius:10px;">
          <div><?php echo $nft['NameNft'];?></div>
          <div><?php echo $nft['Prix'];?></div>
        </div>
        <?php }?>
      </div>
    </div>
 


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
        <a href="https://facebook.com/" class="text-white me-4">
          <i class="fab fa-facebook-f" ></i>
        </a>
        <a href="https://twitter.com/" class="text-white me-4">
          <i class="fab fa-twitter" ></i>
        </a>
        <a href="https://google.com/" class="text-white me-4">
          <i class="fab fa-google" ></i>
        </a>
        <a href="https://instagram.com/" class="text-white me-4">
          <i class="fab fa-instagram" ></i>
        </a>
        <a hhref="https://linkedin.com/" class="text-white me-4">
          <i class="fab fa-linkedin" ></i>
        </a>
        <a href="https://github.com/" class="text-white me-4">
          <i class="fab fa-github" ></i>
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
            <h6 class="text-white" style="color:rgb(69, 69, 240) !important">NFTea</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
                Site-web specialized in Creating NFTs ,Sell and buy them ,a digital community full of creativity and imagination !
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
              <a href="#!" class="text-white">Collections</a>
            </p>
            <p>
              <a href="#!" class="text-white">Best NFTs</a>
            </p>
            <p>
              <a href="#!" class="text-white">Create your first step</a>
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
            <p><i class="fas fa-envelope mr-3"></i> NFTea@hotmail.com</p>
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
      © 2023 Copyright:
      <a class="text-white" href="index.html"
         >NFTea.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>
<!-- End of .container -->

<script src="script.js"></script>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>