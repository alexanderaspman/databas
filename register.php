<?php  include('config.php'); ?>
<?php  include('innehåll/registration_login.php'); ?>

<?php include('innehåll/head_section.php'); ?>

<title>LifeBlog | Sign up </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/innehåll/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Registrera Blogg user</h2>
			<?php include(ROOT_PATH . '/innehåll/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Redan användare? <a href="login.php">Logga in</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
    <?php include( ROOT_PATH . '/innehåll/footer.php'); ?>