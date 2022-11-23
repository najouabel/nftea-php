<?php 
    include("../user/include/sess.php");
   $db = new PDO('mysql:host=127.0.0.1;dbname=nftea;charset=utf8','root','');
    
	$IdNft=$_GET['IdNft'];
	$query = $db->prepare('select * from nft where IdNft=?');
	$query->execute([$IdNft]);
	$data = $query->fetch();

    if(isset($_POST['submit'])){
       
      $CollectionId = $_POST['CollectionId'];
      $NameNft = $_POST['NameNft'];
      $description = $_POST['description'];
      $imageNft = $_POST['imageNft'];
      $Prix = $_POST['Prix'];	
        
        $req = $db->prepare("update nft set CollectionId=?, NameNft=?, description=?,imageNft=?,Prix=? where IdNft=?");
        $req->execute([$CollectionId,$NameNft,$description,$imageNft,$Prix,$IdNft]);
    
        header('location: /nftea-site-/user/profil.php?msg=updated');
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
    <link href='https://css.gg/push-chevron-right.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
        <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"/>

    
    <link rel="stylesheet" href="css/collection.css">
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg bg-light  fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php" ><img src="img/logonft.png" class="logo" alt=""></a>
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
            <a class="nav-link" href="addnft.php">Create</a>
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
              <input class="form-control me-2" type="search" placeholder="Search collection,NFT" aria-label="Search">
            <!--  <button class="btn btn-outline-success" type="submit">Search</button>-->
            <form class="container-fluid justify-content-start">
              <?php $reqq = $db->query("SELECT * FROM `user`");
                        while($dataa =  $reqq->fetch()):
                          if($dataa['Email']==$_SESSION['Email']){ 
                            $id_user=$dataa['UserId'];?>
                            <button class="btn btn-outline-success me-2" type="button"><a href="./profil.php"><?php echo $dataa['UserName'] ?></a></button>
                
                        <?php  }
?> <?php endwhile; ?> 
                
                <button class="btn btn-outline-success me-2" type="button"><a href="../login/logout.php">Déconnexion</a></button>
                
            </a>
              </form>
            </form>
          </div>
        </div>
      </nav>
    </div>
   
        <img class="imgcover" src="./img/smoke3.jpg" alt="">
        <div class="div-collection">
        <h2>Anonyme</h2>
        <p>collection :Weird Ape Official Club</p>
        <p>Éléments 45 062</p>
    </div>
    <div class="list-profil">
      <button>Display</button>
      <button>Create nft</button>
      <button>Create collection</button>
    </div>
    <div class="hr">
      <hr>
    </div>



     <div class="global-t">
	   <form action="" method="post">
						   <div class="ajout-one">
							   <div class="ajout-two">
							   <h3 style="color:white;"> Update nft:</h3>
                    <select name="CollectionId" class="form-select" aria-label="Default select example">
                  
                 
                  <?php 
                    $reqq = $db->query("SELECT * FROM `collection`");
                    while($dataa =  $reqq->fetch()):
                      if($dataa['UserId']==$id_user){
    ?>
                 <option selected value="<?= $dataa['CollectionId'] ?>"><?= $dataa['NameColl'] ?></option>
                  <?php } endwhile; ?> 
                </select>
                </div>
              </div>
								   
              <div class="ajout-two">
                <div class="ajout-tree">
                 <label for="NameNft" style="color:white;">NameNft:</label><br>
                 <input type="text" id="NameNft" name="NameNft" value="<?= $data['NameNft'] ?>" style="width:350px;" >
                  </div>
                 <div class="ajout-tree">
                   <label for="description" style="color:white;">description:</label><br>
                    <input type="text" name="description" id="description" value="<?= $data['description'] ?>" style="width:350px;" >
                    </div>
                    <div class="ajout-tree">
                      <label for="imageNft" style="color:white;">imageNft:</label><br>
                        <input type="file" id="imageNft" name="imageNft" value="<?= $data['imageNft'] ?>" style="width:350px;">
                      </div>
                     <div class="ajout-tree">
                    <label for="Prix" style="color:white;">Prix:</label><br>
                    <input type="text" id="Prix" name="Prix" value="<?= $data['Prix'] ?>" style="width:350px;" >
                     </div>
                     <button type="submit" name="submit" style="width:10%;color:#fff;background-color:#000;border-radius:5px;margin-top:25px;">update</button>
                      </div>
						   </div>
					   </form>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>