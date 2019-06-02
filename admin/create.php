<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/innehåll/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<?php include(ROOT_PATH . '/admin/innehåll/head_section.php'); ?>
	<title>Admin | Manage users</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/innehåll/navbar.php') ?>
	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/innehåll/menu.php') ?>
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Skapa användare</h1>

			<form method="post" action="<?php echo BASE_URL . 'admin/create.php'; ?>" >

				<?php include(ROOT_PATH . '/innehåll/errors.php') ?>

				<?php if ($isEditinginlaeg === true): ?>
					<input type="hidden" name="inlaeg" value="<?php echo $inlaeg; ?>">
				<?php endif ?>

				<input type="text" name="topik" value="<?php echo $inlaeg1; ?>" placeholder="topik">
				<input type="text" name="inlaeg1" value="<?php echo $topik ?>" placeholder="inlaeg1">
				

				<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="update_inlaeg">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_inlaeg">Save User</button>
				<?php endif ?>
			</form>
		</div>

		<div class="table-div">
			<?php include(ROOT_PATH . '/innehåll/messages.php') ?>

			<?php if (empty($admins)): ?>
				<h1>No admins in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>N</th>
						<th>Admin</th>
						<th>Role</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($inlaeg as $key => $inlaeg): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td class="inlaegg">
                            <?php echo $inlaeg['topic']; ?>
							
                            </td>
                            <td>

                            	<?php echo $inlaeg['inleag1']; ?>
                            </td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="create.php?edit-inlaeg=<?php echo $inlaeg['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="create.php?delete-inlaeg=<?php echo $inleag['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
	</div>
</body>
</html>