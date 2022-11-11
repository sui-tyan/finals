<?php 
	include 'dbConnection.php';
	$pdo = pdo_connect_mysql();
	if(!empty($_POST)) {

		$_POST['id'] = 'auto';
		$id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
		$firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : " ";
		$lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : " ";
		$middleName = isset($_POST["middleName"]) ? $_POST["middleName"] : " ";
		$idNum = isset($_POST["idNum"]) ? $_POST["idNum"] : " ";
		$birthdate = isset($_POST["birthdate"]) ? $_POST["birthdate"] : " ";
		$email = isset($_POST["email"]) ? $_POST["email"] : " ";
		$course = isset($_POST["course"]) ? $_POST["course"] : " ";
		$address = isset($_POST["address"]) ? $_POST["address"] : " ";
		$guardianName = isset($_POST["guardianName"]) ? $_POST["guardianName"] : " ";
		$contactNumber = isset($_POST["contactNumber"]) ? $_POST["contactNumber"] : " ";
		$relationshipToGuardian = isset($_POST["guardianRelationship"]) ? $_POST["guardianRelationship"] : " ";

		$stmt = $pdo->prepare('INSERT INTO students VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
		$stmt->execute([$id, $firstName, $lastName, $middleName, $idNum, $birthdate, $email, $course, $address, $guardianName, $contactNumber, $relationshipToGuardian]);

		$msg = 'Successfully added to database.';
	}
?>