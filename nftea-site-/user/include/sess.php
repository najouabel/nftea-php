<?php
session_start();
if(!isset($_SESSION['Email'])){
	header("location:/nftea-site-/index.php?erreur=1");
	die();
}