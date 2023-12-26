<?php 

include('connection.php');

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
// die($password);

if (!empty($username)) {
	// code...
	if (!empty($password)) {
		// code...
		
		// die($password);

		if (mysqli_connect_error()) {
			// code...
			die('Connect Error ('.mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO user_register (username, password, email)
			values ('$username', '$password', '$email')";

			if ($conn->query($sql)) {
				// code...
				echo "New record is inserted sucessfully";
			}
			else{
				echo "Error: ". $sql ." ". $conn->error;
			}
			$conn->close();
		} 
	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}



 ?>

 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<br><br>
 	<center><h1>Go to Login Page</h1></center><br>
 	<center><a href="login.php"><button>Go to Login</button></a></center>
 
 </body>
 </html> -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Go to Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        center {
            display: block;
            text-align: center;
            margin: 20px 0;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <br><br>
    <center><h1>Go to Login Page</h1></center><br>
    <center><a href="login.php"><button>Go to Login</button></a></center>
</body>
</html>
