
<?php 

require_once 'dbConfig.php';

function insertIntoDesignerRecords($pdo,$first_name, $last_name, $gender, $email, $designation, $designtool, $supervisor) {

	$sql = "INSERT INTO designer_records (first_name,last_name,gender,email,designation,designtool,supervisor) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $email, 
    $designation, $designtool, $supervisor]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllDesignerRecords($pdo) {
	$sql = "SELECT * FROM designer_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getDesignerByID($pdo, $designer_id) {
	$sql = "SELECT * FROM designer_records WHERE designer_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$designer_id])) {
		return $stmt->fetch();
	}
}

function updateADesigner($pdo, $designer_id, $first_name, $last_name, 
	$gender, $email, $designation, $designtool,$supervisor) {

	$sql = "UPDATE designer_records 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					email = ?, 
					designation = ?, 
					designtool = ?, 
					supervisor = ? 
			 WHERE  designer_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, 
    $email, $designation, $designtool, $supervisor, $designer_id]);

	if ($executeQuery) {
		return true;
	}
}



function deleteADesigner($pdo, $designer_id) {

	$sql = "DELETE FROM designer_records WHERE designer_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$designer_id]);

	if ($executeQuery) {
		return true;
	}

}




?>
