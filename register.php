<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>register page</title>
</head>
<body>
<center><h1>Register page</h1></center><br><br>
<form action="reg.php" method="post">
	username: <input type="text" name="username" placeholder="username"><br>
	email: <input type="text" name="email" placeholder="email"><br>
	password: <input type="text" name="password" placeholder="password">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register Page</title>
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

        form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Register Page</h1>
    <form action="reg.php" method="post">
        Username: <input type="text" name="username" placeholder="Username"><br>
        Email: <input type="text" name="email" placeholder="Email"><br>
        Password: <input type="text" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
