<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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

        .signup-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
        }

        .logo {
            width: 80px;
            margin-bottom: 10px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select.input-field {
            background: white;
        }

        .signup-btn {
            width: 80%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background: black;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .signup-btn:hover {
            background: darkgray;
        }

        .login-text {
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Sign Up</h2>
        <form action="process_signup.php" method="POST">
            <input type="text" class="input-field" placeholder="Full Name" required>
            <input type="text" class="input-field" placeholder="Username" required>
            <input type="password" class="input-field" placeholder="Password" required>
            <input type="password" class="input-field" placeholder="Confirm Password" required>
            <select class="input-field" name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="teacher">Teacher</option>
                <option value="guidance">Guidance Counselor</option>
                <option value="lis">LIS Staff</option>
            </select>
            <button type="submit" class="signup-btn">SIGN UP</button>
            <p class="login-text">Already have an account? 
                <span id="loginLinks">
                    <a href="teacher_login.php" class="login-link">Login here</a>
                </span>
            </p>
        </form>
    </div>

    <script>
        // Change login link based on selected role
        document.querySelector('select[name="role"]').addEventListener('change', function() {
            const loginLinks = document.getElementById('loginLinks');
            const role = this.value;
            
            switch(role) {
                case 'teacher':
                    loginLinks.innerHTML = '<a href="teacher_login.php" class="login-link">Login here</a>';
                    break;
                case 'guidance':
                    loginLinks.innerHTML = '<a href="guidance_login.php" class="login-link">Login here</a>';
                    break;
                case 'lis':
                    loginLinks.innerHTML = '<a href="LIS_login.php" class="login-link">Login here</a>';
                    break;
                default:
                    loginLinks.innerHTML = '<a href="teacher_login.php" class="login-link">Login here</a>';
            }
        });
    </script>
</body>
</html>