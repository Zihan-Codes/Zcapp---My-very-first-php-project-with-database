
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
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
    <h1>This is the login page</h1>
    <form name="f1" action="authentication.php" onsubmit="return validation()" method="post">
        Username: <input type="text" name="username" placeholder="Username"><br>
        Password: <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>

    <script>
        function validation() {
            var id = document.f1.username.value;
            var ps = document.f1.password.value;
            if (id.length == "" && ps.length == "") {
                alert("Username and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("Username is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</body>
</html>
