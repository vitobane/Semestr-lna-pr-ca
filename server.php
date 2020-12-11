<?php 
	session_start();

	// deklaracia premennych
	$username = "";
	$email    = "";
	$surname  = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$RegisterDate  = "";
	$LastLoginDate  = "";

	// Pripojenie do databazy
	$db = mysqli_connect('46.229.230.164', 'bu029000', 'uqhwbvei', 'bu029000db');

	// REGISTRACIA
	if (isset($_POST['reg_user'])) {
		// dorucenie premennych do databazy
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$surname = mysqli_real_escape_string($db, $_POST['surname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// nevyplnene formulare
		if (empty($username)) { array_push($errors, "<h1>Nezadali ste Meno!</h1>"); }
		if (empty($surname)) { array_push($errors, "<h1>Nezadali ste Priezvisko!</h1>"); }
		if (empty($email)) { array_push($errors, "<h1>Nezadali ste Email!</h1>"); }
		if (empty($password_1)) { array_push($errors, "<h1>Nezadali ste Heslo!</h1>"); }

		if ($password_1 != $password_2) {
			array_push($errors, "<h1>Heslá sa nezhoduju!</h1>");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1); //encrypt the password before saving in the database
			$query = "INSERT INTO pavol (username, surname, email, password) 
					  VALUES('$username', '$surname', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			header('location: ponuka.php');
		}

	}


	// PRIHLASENIE
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "<h1>Nezadali ste Meno!</h1>");
		}
		if (empty($password)) {
			array_push($errors, "<h1>Nezadali ste Heslo!</h1>");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM pavol WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				header('location: ponuka.php');
			}else {
				array_push($errors, "<h1>Nesprávne Meno alebo Heslo!</h1>");
			}
		}
	}

?>