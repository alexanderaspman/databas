<!DOCTYPE html>
<html>
<head>
    <!-- Google Fonts -->
    <?php require_once('config.php') ?>
    <?php require_once( ROOT_PATH . '/innehåll/public_functions.php') ?>
	<?php require_once( ROOT_PATH . '/innehåll/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

    <?php require_once('innehåll/head_section.php') ?>
	<title>Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include('innehåll/navbar.php') ?>
		<!-- // navbar -->
        <?php include('innehåll/banner.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Senaste inläggen</h2>
            <hr>
			<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
        <!-- Added this if statement... -->
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topics']['id'] ?>"
				class="btn category">
				<?php echo $post['topics']['name'] ?>
			</a>
		<?php endif ?>

		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">läs mer</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
			<!-- more content still to come here ... -->
		</div>
		<!-- // Page content -->

		<!-- footer -->
        <?php include('innehåll/footer.php') ?>

		<!-- // footer -->

	</div>
	<!-- // container -->
</body>
</html>