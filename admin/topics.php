<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/innehåll/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/innehåll/head_section.php'); ?>
<!-- alla topics ffrån DB -->
<?php $topics = getAllTopics();	?>
<link rel="stylesheet" href="../static/css/admin_styling.css">
	<title>Admin | Manage Topics</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/innehåll/navbar.php') ?>
	<div class="container content">
		<?php include(ROOT_PATH . '/admin/innehåll/menu.php') ?>

		<div class="action">
			<h1 class="page-title">Create/Edit Topics</h1>
			<form method="post" action="<?php echo BASE_URL . 'admin/topics.php'; ?>" >
				<!-- validation errors -->
				<?php include(ROOT_PATH . '/innehåll/errors.php') ?>
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>
				<input type="text" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="Topic">
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">Save Topic</button>
				<?php endif ?>
			</form>
		</div>

		<div class="table-div">
			<?php include(ROOT_PATH . '/innehåll/messages.php') ?>
			<?php if (empty($topics)): ?>
				<h1>No topics in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>N</th>
						<th>Topic Name</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $topic['name']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="topics.php?edit-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete"								
									href="topics.php?delete-topic=<?php echo $topic['id'] ?>">
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