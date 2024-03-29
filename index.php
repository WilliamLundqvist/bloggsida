<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once(ROOT_PATH . '/includes/head_section.php') ?>
<?php require_once(ROOT_PATH . '/includes/registration_login.php') ?>
<title>LifeBlog | Home </title>
</head>

<body>
        <!-- container - wraps whole page -->

        <div class="container">
                <div class="img" id="img">
                        <!-- navbar -->
                        <?php include(ROOT_PATH . '/includes/navbar.php') ?>
                        <!-- // navbar -->

                        <!-- banner -->
                        <?php include(ROOT_PATH . '/includes/banner.php') ?>
                        <!-- //banner -->
                </div>
                <!-- Page content -->
                <div class="content">
                        <h2 class="content-title">Recent Articles</h2>
                        <hr>
                        <!-- more content still to come here ... -->
                        <div class="post-parent">
                                <?php foreach ($posts as $post): ?>
                                        <div class="post" style="margin-left: 0px;">
                                                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>"
                                                        class="post_image" alt="">

                                                <?php if (isset($post['topic']['name'])): ?>
                                                        <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                                                                class="btn category">
                                                                <?php echo $post['topic']['name'] ?>
                                                        </a>

                                                <?php endif ?>
                                                <?php  if (isset($post['views'])): ?>
                                                        <a class="btn views">
                                                         <?php echo "Views: " . $post['views'] ?>
                                                        </a>
                                                <?php endif ?>
                                                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                                                        <div class="post_info">
                                                                <h3>
                                                                        <?php echo $post['title'] ?>
                                                                </h3>
                                                                <div class="info">
                                                                        <span>
                                                                                <?php echo date("F j, Y ", strtotime($post["created_at"])); ?>
                                                                        </span>
                                                                        <span class="read_more">Read more...</span>
                                                                </div>
                                                        </div>
                                                </a>
                                        </div>
                                <?php endforeach ?>
                        </div>
                </div>
                <!-- // Page content -->

                <!-- footer -->
                <?php include(ROOT_PATH . '../includes/footer.php') ?>