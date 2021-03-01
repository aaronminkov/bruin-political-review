<!DOCTYPE html>
<html>
<?php  include('config.php'); ?>
<?php  include('templates/login_handler.php'); ?>
<head>
    <title>Login | Bruin Political Review</title>
    <?php include('templates/header.php'); ?>
        <section id="entity_section" class="entity_section">
        	<div style="width: 40%; margin: 20px auto;">
        		<form method="post" action="login">
        			<div class="form-group">
                        <label for="usr" class="navy-color">Username:</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="navy-color">Password:</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="pwd">
                    </div>
        			<?php include(ROOT_PATH . '/templates/errors.php') ?>
                    <div style="text-align: center;">
        			    <button type="submit" class="btn gold" name="login_btn">Login</button>
        			</div>
        			<p></p>
        		</form>
        	</div>
        </section>
<?php include('templates/footer.php'); ?>

</html>