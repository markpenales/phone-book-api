<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-square {
            border: 2px solid #333;
            padding: 20px;
            text-align: center;
        }

        /* Style the Google Login button or integrate the necessary code */
        .google-login-button {
            /* Add your styles or integrate Google Sign-In API styles */
        }
    </style>
</head>
<body>
<div class="login-square">
    <a href={{route('login')}}>Login with Google</a>
</div>
</body>
</html>
