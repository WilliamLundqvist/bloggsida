<?php if (isset($_SESSION['user']['username'])) { ?>
        <div class="logged_in_info">
                <span>welcome
                        <?php echo $_SESSION['user']['username'] ?>
                </span>
                |
                <span><a href="logout.php">logout</a></span>
        </div>
        <script>
                function removeImg() {
                        img.classList.add("active");
                        navbar.classList.add("active");
                }
                removeImg();
                </script>
<?php } else { ?>

        <div class="banner">
                <div class="welcome_msg">
                        <h1>Welcome to williams personal blog!!</h1>
                        <p>

                        </p>
                        <a href="register.php" class="btn">Join us!</a>
                </div>
               <div class="login_div_parent">
                <div class="login_div">
                        <form action="index.php" method="post">
                                <h2>Login</h2>
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <div class="bottom_login">
                                        <button class="btn" type="submit" name="login_btn">Sign in</button>
                                        <?php include(ROOT_PATH . '/includes/errors.php') ?>
                                </div>
                        </form>
                </div>
                </div>
        </div>

<?php } ?>