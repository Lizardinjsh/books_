<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .register-container {
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
        .login-link {
            color: #666666;
            text-decoration: none;
            font-size: 14px;
        }
        .login-link:hover {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="<?php if (isset($errors["username"])){?><?= $errors["username"] ?><?php } else { ?>Username <?php } ?>"/>
            <input type="password" name="password" placeholder=<?php if (isset($errors["password"])){?><?= $errors["password"] ?><?php } else { ?>Password <?php } ?>>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
            <button class="login-button">Register</button>
        </form>
        <a href="/login" style="color:#355E3B">Already have an account? Login!</a>
    </div>
<!-- </body>
</html>


<?php require "components/head.php";?>


<article>
    <div class="login-box">
        <div class="bookhub-box">
            <h1 class="book">Books you can borrow!</h1>
        </div>
        <form method="POST"> 
            <input class="login-input" name="username" placeholder="<?php if (isset($errors["username"])){?><?= $errors["username"] ?><?php } else { ?>Username <?php } ?>"/>
            <input type="password" class="login-input" name="password" placeholder="<?php if (isset($errors["password"])){?><?= $errors["password"] ?><?php } else { ?>Password <?php } ?>"/>
            <button class="login-button">Register</button>
        </form>
        <a href="/login" style="color:#355E3B">Already have an account? Login!</a>
    </div>
</article> -->
<?php
    require "components/footer.php";
?>