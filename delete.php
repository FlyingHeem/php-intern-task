<?php

include 'vendor/autoload.php';

if(isset($_GET['id'])&& is_numeric($_GET['id'])){
	$id = $_GET['id'];
	$user = new \Classes\User();
	$user->setid($id);
	$user->delete();
}
header('location:list.php');
