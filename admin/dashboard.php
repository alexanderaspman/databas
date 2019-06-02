<?php  include('../config.php'); ?>
	<?php include(ROOT_PATH . '/admin/innehåll/admin_functions.php'); ?>
	<?php include(ROOT_PATH . '/admin/innehåll/head_section.php'); ?>
	<title>Admin</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'index.php' ?>">
				<h1>Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Välkommen</h1>
		<div class="stats">
		
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>