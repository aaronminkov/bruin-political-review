<!DOCTYPE html>
<html>
<?php  include('../config.php'); ?>
<?php include('templates/admin_functions.php'); ?>
<?php
$numPosts = numberOfPosts();
$numUsers = numberOfUsers();
$numSubscribers = numberOfSubscribers();
?>
<head>
    <title>Dashboard | BPR Admin Portal</title>
    <?php include('templates/header.php'); ?>
    <div class="dashboard">
		<h1>Welcome,  <?php echo $_SESSION['user']['name']; ?></h1>
		<div class="stats">
			<a href="users.php">
				<span><?php echo $numUsers; ?></span> <br>
				<span>Registered Users</span>
			</a>
			<a href="posts.php">
				<span><?php echo $numPosts; ?></span> <br>
				<span>Published Posts</span>
			</a>
			<a href="subscribers.php">
				<span><?php echo $numSubscribers; ?></span> <br>
				<span>Email Subscribers</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons" style="text-align: center;">
			<a class="gold" href="users.php">Add Users</a>
			<a class="gold" href="create_post.php">Add Posts</a>
		</div>
    </div>
<?php include('templates/footer.php'); ?>
</html>