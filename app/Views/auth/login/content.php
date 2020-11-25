<div class="container">
        <div class="img">
            <img src="<?= base_url(); ?>/img/logo.png">
        </div>
        <div class="login-content">
            <form action="<?= base_url('/'); ?>">
              
                <h2 class="title">Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
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
                <a href="<?= base_url('/register'); ?>">Create New Account</a>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
            
        </div>
  
    </div>