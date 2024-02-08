<?php if (isset($_SESSION['user']['username'])) { ?>
        <div class="logged_in_info">
                <span>welcome <?php echo $_SESSION['user']['username'] ?></span>
                |
                <span><a href="logout.php">logout</a></span>
        </div>
<?php }else{ ?>

<div class="banner top">
        <div class="welcome_msg">
                <h1>Welcome to williams personal blog!!</h1>
                <p> 
                   
                </p>
                <a href="register.php" class="btn">Join us!</a>
        </div>
</div>

<div class="banner bottom">
        <div class="login_div">
                <form action="index.php" method="post" >
                        <h2>Login</h2>
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password"  placeholder="Password"> 
                        <button class="btn" type="submit" name="login_btn">Sign in</button>
                </form>
        </div>
</div>
</div>

<?php } ?>

