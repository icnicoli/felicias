<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <style>
        body {
            background-image: url('img/background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            font-family: 'Lora', serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            line-height: 1.6;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #login-container {
            background-color: #e4dbd8;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #login-button {
            background-color: #754335;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        #login-button:hover {
            background-color: #45a049;
        }

        #google-login-button {
            background-color: #4285F4;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin: 10px;
        }

        #google-login-button:hover {
            background-color: #3b79db;
        }
    </style>
</head>
<body>
<img src="img/logo.png" class="logo">

<div id="login-container">
    <h2>Login to Your Account</h2>
    <form action="index.html" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button id="login-button" type="submit">Login</button>
    </form>
    <p>or</p>
    <div id="g_id_onload"
         data-client_id="166411592261-epsrov29848vv1gfse1qqr8ao258qg2b.apps.googleusercontent.com"
         data-context="signin"
         data-ux_mode="popup"
         data-login_uri="http://localhost/EndtermFelicia/index.html/" #butang di ang imo directory sang file if ever lain
         data-auto_prompt="false">
    </div>
    <div class="g-signin2" data-onsuccess="onGoogleSignInCallback" data-clientid="166411592261-epsrov29848vv1gfse1qqr8ao258qg2b.apps.googleusercontent.com"></div>
</div>

<script>
    function onGoogleSignInCallback(googleUser) {
        var profile = googleUser.getBasicProfile();
        var userEmail = profile.getEmail();
        alert('Google user signed in with email: ' + userEmail);
    }

    function initGoogleSignIn() {
        gapi.load('auth2', function() {
            gapi.auth2.init({
                client_id: '166411592261-epsrov29848vv1gfse1qqr8ao258qg2b.apps.googleusercontent.com'
            });
        });
    }

    // Initialize Google Sign-In
    initGoogleSignIn();
</script>

</body>
</html>
