<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Frontend Web Developer Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender"></p>
		<p><label for="email">Email</label> <input type="text" name="email"></p>
		<p><label for="designation">Designation</label> <input type="text" name="designation"></p>
		<p><label for="designtool">Design Tool</label> <input type="text" name="designtool"></p>
		<p><label for="supervisor">Supervisor</label> <input type="text" name="religion">
			<input type="submit" name="insertNewDesignerBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Designer ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
        <th>Email</th>
	    <th>Designation</th>
	    <th>Design Tool</th>
	    <th>Supervisor</th>
	    <th>Action</th>
	  </tr>

	  <?php $seeAllEmployeeRecords = seeAllDesignerRecords($pdo); ?>
	  <?php foreach ($seeAllEmployeeRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['designer_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['year_level']; ?></td>
	  	<td><?php echo $row['section']; ?></td>
	  	<td><?php echo $row['adviser']; ?></td>
	  	<td><?php echo $row['religion']; ?></td>
	  	<td>
	  		<a href="designer.php?designer_id=<?php echo $row['designer_id'];?>">Edit</a>
	  		<a href="deletedesigner.php?designer_id=<?php echo $row['designer_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>