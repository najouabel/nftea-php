<?php
 require '../user/include/conexion.php'; 
$IdNft = $_GET['IdNft'];
$req = $db->prepare('delete from nft where IdNft=?');
$req->execute([$IdNft]);
header('location: /nftea-site-/user/profil.php?msg=deleted');
?>
