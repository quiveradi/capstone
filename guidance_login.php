<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: url('bg.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Blurred background effect */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            filter: blur(5px);
            z-index: -1;
        }

        .login-container {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            height: 500px;
            width: 500px;
        }

        .logo {
            width: 100px;
            margin-bottom: 10px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .forgot-password {
            font-size: 12px;
            color: gray;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        .login-btn {
            width: 80%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background: black;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .login-btn:hover {
            background: darkgray;
        }

        .signup-text {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2 class="login-title">Guidance Login</h2>
    <form action="guidance_homepage.php" method="GET">
    <input type="text" class="input-field" placeholder="USERNAME" required>
    <input type="password" class="input-field" placeholder="PASSWORD" required>
    <a href="#" class="forgot-password">FORGOT PASSWORD?</a>
    <button type="submit" class="login-btn">LOGIN</button>
    <p class="signup-text">Don't have an account? <a href="signup.php" class="signup-link">Sign up</a></p>
</form>

    </div>
</body>
</html>
