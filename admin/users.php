<!DOCTYPE html>
<html>
<?php  include('../config.php'); ?>
<?php include('templates/admin_functions.php'); ?>
<?php
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<head>
    <title>Manage Users | BPR Admin Portal</title>
    <?php include('templates/header.php'); ?>
	<div class="content">
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Create/Edit Admin User</h1>

			<form method="post" action="<?php echo BASE_URL . 'admin/users'; ?>" >

				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/templates/errors.php') ?>

				<!-- if editing user, the id is required to identify that user -->
				<?php if ($isEditingUser === true): ?>
					<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>

				<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="passwordConfirmation" placeholder="Confirm Password">
				<select name="role">
					<option value="" selected disabled>Role</option>
					<?php foreach ($roles as $key => $role): ?>
						<option value="<?php echo $role; ?>"><?php echo $role; ?></option>
					<?php endforeach ?>
				</select>

				<?php if ($isEditingUser === true): ?> 
					<button type="submit" class="btn gold" name="update_admin">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn gold" name="create_admin">Save User</button>
				<?php endif ?>
			</form>
		</div>

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/templates/messages.php') ?>

			<?php if (empty($admins)): ?>
				<h1>No admins in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>ID</th>
						<th>Admin</th>
						<th>Role</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($admins as $key => $admin): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td>
							    <?php echo $admin['name']; ?>, &nbsp;
								<?php echo $admin['username']; ?>, &nbsp;
								<?php echo $admin['email']; ?>	
							</td>
							<td><?php echo $admin['role']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="users.php?edit-admin=<?php echo $admin['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete" 
								    href="users.php?delete-admin=<?php echo $admin['id'] ?>">
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