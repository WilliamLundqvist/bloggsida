<?php include('../config.php'); ?>
<?php include('admin_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<title>Admin | Dashboard</title>
</head>

<body>
        <div class="header">
                <div class="logo">
                        <a href="<?php echo BASE_URL . 'admin/dashboard.php' ?>">
                                <h1>LifeBlog - Admin</h1>
                        </a>
                </div>
                <?php if (isset($_SESSION['user'])): ?>
                        <div class="user-info">
                                <span>
                                        <?php echo $_SESSION['user']['username'] ?>
                                </span> &nbsp; &nbsp;
                                <a href="<?php echo BASE_URL . 'logout.php'; ?>" class="logout-btn">logout</a>
                        </div>
                <?php endif ?>
        </div>
        <div class="container dashboard">
                <h1>Welcome</h1>
                <div class="stats">
                        <a href="users.php" class="first">
                                <?php
                                $sql = "SELECT COUNT(*) as total_rows FROM users";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                echo $row["total_rows"];

                                ?>

                                <br>
                                <span>Registered users</span>
                        </a>
                        <a href="posts.php">
                                <span>
                                        <?php
                                        $sql = "SELECT COUNT(*) as total_rows FROM posts";
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                        echo $row["total_rows"];


                                        ?>
                                </span> <br>
                                <span>Published posts</span>
                        </a>
                
                </div>
                <br><br><br>
                <div class="buttons">
                        <a href="users.php">Add Users</a>
                        <a href="posts.php">Add Posts</a>
                </div>
        </div>
</body>

</html>