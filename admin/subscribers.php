<!DOCTYPE html>
<html>
<?php  include('../config.php'); ?>
<?php include('templates/admin_functions.php'); ?>
<?php
	$subscribers = getSubscribers();				
?>
<head>
    <title>Manage Subscribers | BPR Admin Portal</title>
    <?php include('templates/header.php'); ?>
	<div class="content">
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">View Subscribers</h1>
		</div>

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/templates/messages.php') ?>

			<?php if (empty($subscribers)): ?>
				<h1>No subscribers in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>ID</th>
						<th>Subscriber</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($subscribers as $key => $subscriber): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
							    <?php echo $subscriber['email']; ?>, &nbsp;
								<?php echo $subscriber['created_at']; ?>	
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="subscribers.php?delete-subscriber=<?php echo $subscriber['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
<?php include('templates/footer.php'); ?>
</html>