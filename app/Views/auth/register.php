<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="/img/logo.png">
        </div>
        <div class="login-content">
            <form action="<?= base_url('auth/login'); ?>">
          
                <h2 class="title">Register</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <input type="submit" class="btn" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>