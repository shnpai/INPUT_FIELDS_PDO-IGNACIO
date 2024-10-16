<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewDesignerBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$email = trim($_POST['email']);
	$designation = trim($_POST['designation']);
	$designtool = trim($_POST['designtool']);
	$supervisor = trim($_POST['supervisor']);

	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($email) && !empty($designation) && !empty($designtool) && !empty($supervisor)) {
			$query = insertIntoDesignerRecords($pdo, $firstName, $lastName, 
			$gender, $email, $designation, $designtool, $supervisor);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editDesignerBtn'])) {
	$designer_id = $_GET['designer_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$email = trim($_POST['email']);
	$designation = trim($_POST['designation']);
	$designtool = trim($_POST['designtool']);
	$supervisor = trim($_POST['supervisor']);

	if (!empty($designer_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($email) && !empty($designation) && !empty($designtool) && !empty($supervisor)) {

		$query = updateADesigner($pdo, $designer_id, $firstName, $lastName, $gender, $email, $designation, $designtool, $supervisor);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteDesignerBtn'])) {

	$query = deleteADesigner($pdo, $_GET['designer_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>
