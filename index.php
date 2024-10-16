<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frontend Web Developer Management System</title>
    <style>
        
        body {
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4;      
            margin: 0;                    
            padding: 20px;                 
        }

        h3 {
            text-align: center;             
            color: #333;                    
        }

        form {
            background: #fff;               
            padding: 20px;                 
            border-radius: 8px;             
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;              
            margin: 0 auto;                 
        }

        label {
            display: block;                 
            margin-bottom: 5px;           
            font-weight: bold;              
        }

        input[type="text"], input[type="email"] {
            width: 100%;                    
            padding: 10px;                 
            margin-bottom: 20px;           
            border: 1px solid #ccc;       
            border-radius: 4px;            
            box-sizing: border-box;       
        }

        input[type="submit"] {
            background-color: #4CAF50;     
            color: white;                   
            border: none;                  
            padding: 15px 20px;            
            border-radius: 4px;           
            cursor: pointer;               
            font-size: 16px;                
        }

        input[type="submit"]:hover {
            background-color: #45a049;      
        }

    
        table {
            width: 100%;                   
            border-collapse: collapse;      
            margin-top: 20px;               
        }

        th, td {
            border: 1px solid #ccc;        
            padding: 10px;                 
            text-align: left;              
        }

        th {
            background-color: #4CAF50;     
            color: white;                  
            font-weight: bold;              
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;      
        }

        tr:hover {
            background-color: #ddd;         
        }

        
    </style>
</head>
<body>
	<h3>Welcome to the Frontend Web Developer Management System. Input your details here to register</h3>
	
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName" required></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName" required></p>
		<p><label for="gender">Gender</label> <input type="text" name="gender" required></p>
		<p><label for="email">Email</label> <input type="email" name="email" required></p>
		<p><label for="designation">Designation</label> <input type="text" name="designation" required></p>
		<p><label for="designtool">Design Tool</label> <input type="text" name="designtool" required></p>
		<p><label for="supervisor">Supervisor</label> <input type="text" name="supervisor" required></p>
		
		<p><input type="submit" name="insertNewDesignerBtn" value="Register Designer"></p>
	</form>

	<table>
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

	  <?php $seeAllDesignerRecords = seeAllDesignerRecords($pdo); ?>
	  <?php foreach ($seeAllDesignerRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['designer_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['designation']; ?></td>
	  	<td><?php echo $row['designtool']; ?></td>
	  	<td><?php echo $row['supervisor']; ?></td>
	  	<td>
	  		<a href="editdesigner.php?designer_id=<?php echo $row['designer_id']; ?>">Edit</a>
	  		<a href="deletedesigner.php?designer_id=<?php echo $row['designer_id']; ?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>
