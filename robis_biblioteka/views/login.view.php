<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .signup-link {
            color: #666666;
            text-decoration: none;
            font-size: 14px;
        }
        .signup-link:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form  method="POST">
            <input type="text" name="username" placeholder="<?php if (isset($errors["user"])){?><?= $errors["user"] ?> <?php } else { ?> Username <?php } ?>" ><br>
            <input type="password" name="password" placeholder="<?php if (isset($errors["user"])){?><?= $errors["user"] ?> <?php } else { ?> Password <?php }?>" ><br>
            <button class="login-button">Login</button>
            <a href="/register" style="color:#355E3B">Dont have an account? Create one!</a>
        </form>
      
    </div>
</body>
</html>





<?php
    require "components/footer.php";
?>