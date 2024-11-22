<?php
session_start();
$username = "starrysuite";
$password = "12345678";

if(isset($_POST['submit'])){
    $uname = htmlspecialchars($_POST['username']);
    $pw = htmlspecialchars($_POST['password']);

    if(!empty($uname) && !empty($pw)){
        if($uname == $username && $pw == $password ){
            header('location:admin.php');
        }else{
            $_SESSION['error']="Invalid username or password";
            header('location:adminLogin.php');
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required placeholder="Enter your username" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="Enter your password" />
            </div>

            <button type="submit" class="btn" name="submit">Login</button>
            <div class="error-message" id="errorMessage"></div>
        </form>
        <div class="mt-2 mb-2">
            <?php if(isset($_SESSION['error'])) { ?>
            <p class="small text-warning"><?php echo $_SESSION['error']?></p>
            <?php } ?>
        </div>

        <div class="footer">
            <p><a href="#">Forgot password?</a></p>
        </div>
        <div class="col-md-6" style="display: flex; justify-content: right;">
            <a href="index.php">Back</a>
        </div>
    </div>
</body>

</html>