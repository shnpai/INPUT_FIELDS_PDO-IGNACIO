<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Designer Record</title>
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
            max-width: 600px;               
            margin: 20px auto;             
        }

        p {
            font-size: 1.2em;               
            color: #555;                   
            margin: 10px 0;                 
        }

        label {
            display: block;                 
            margin-bottom: 5px;            
            font-weight: bold;             
        }

        input[type="text"] {
            width: 100%;                    
            padding: 10px;                 
            margin-bottom: 15px;            
            border: 1px solid #ccc;         
            border-radius: 4px;             
            font-size: 1em;                 
        }

        input[type="submit"] {
            background-color: #5bc0de;      
            color: white;                    
            border: none;                    
            padding: 10px 15px;             
            border-radius: 4px;             
            cursor: pointer;                
            font-size: 16px;                 
            display: block;                  
            margin: 20px auto;              
            width: 100%;                    
        }
 
    </style>
</head>
<body>
	<?php 
		// Fetch the designer record by ID
		$getDesignerByID = getDesignerByID($pdo, $_GET['designer_id']); 
	?>
	
	<form action="core/handleForms.php?designer_id=<?php echo $_GET['designer_id']; ?>" method="POST">
		<h3>Editing the record of a Designer with an ID of <?php echo $getDesignerByID['designer_id'];?>: </h3>
		
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getDesignerByID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getDesignerByID['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getDesignerByID['gender']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getDesignerByID['email']; ?>">
		</p>
		<p>
			<label for="designation">Designation</label>
			<input type="text" name="designation" value="<?php echo $getDesignerByID['designation']; ?>">
		</p>
		<p>
			<label for="designtool">Design Tool</label>
			<input type="text" name="designtool" value="<?php echo $getDesignerByID['designtool']; ?>">
		</p>
		<p>
			<label for="supervisor">Supervisor</label>
			<input type="text" name="supervisor" value="<?php echo $getDesignerByID['supervisor']; ?>">
		</p>

		<p>
			<input type="submit" name="editDesignerBtn" value="Update Designer">
		</p>
	</form>
</body>
</html>
