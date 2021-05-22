<?php 
	session_start();
	require_once "bd.php";

	$name = $_POST['name']; 
	$lastname = $_POST['lastname'];
	$email = $_POST['email']; 
	$password =  $_POST['password']; 
	$password_rep =  $_POST['password_rep']; 

	if($password === $password_rep){

		$password = md5($password);
		$result = mysqli_query($db, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES ('$name', '$lastname', '$email', '$password')");
		$_SESSION['message'] = 'Регистрация прошла успешно!';
		header('Location: ../vhod.php');

	}else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../register.php');
	}

 ?>





