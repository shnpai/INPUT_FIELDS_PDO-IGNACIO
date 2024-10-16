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
            font-family: Arial, sans-serif; 
            background-color: #f4f4f4;     
            margin: 0;                     
            padding: 20px;       
         }           

        h1 {
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

        input[type="submit"] {
            background-color: #d9534f;      
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

        input[type="submit"]:hover {
            background-color: #c9302c;       
        }
    </style>
</head>
<body>
	<h1>Are you sure you want to delete this record?</h1>

	<?php 
		// Fetching designer details based on ID passed in the URL
		$getDesignerByID = getDesignerByID($pdo, $_GET['designer_id']); 
	?>

	<form action="core/handleForms.php?designer_id=<?php echo $_GET['designer_id']; ?>" method="POST">

		<div class="DesignerContainer" style="border-style: ridge; 
		font-family: 'system-ui';">
			<p>First Name: <?php echo $getDesignerByID['first_name']; ?></p>
			<p>Last Name: <?php echo $getDesignerByID['last_name']; ?></p>
			<p>Gender: <?php echo $getDesignerByID['gender']; ?></p>
			<p>Email: <?php echo $getDesignerByID['email']; ?></p>
			<p>Designation: <?php echo $getDesignerByID['designation']; ?></p>
			<p>Design Tool: <?php echo $getDesignerByID['designtool']; ?></p>
			<p>Supervisor: <?php echo $getDesignerByID['supervisor']; ?></p>
			<input type="submit" name="deleteDesignerBtn" value="Delete">
		</div>
	</form>
</body>
</html>
