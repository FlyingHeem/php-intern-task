<?php

include 'vendor/autoload.php';

if(isset($_GET['id'])&& is_numeric($_GET['id'])){
	$id = $_GET['id'];
	$email = $_POST['email'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];

	$user = new \Classes\User();
	$user->setId($id);
	$user->setFirstName($firstName);
	$user->setEmail($email);
	$user->setLastName($lastName);
	$user->update();
}
 header('location:list.php');

