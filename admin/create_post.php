<!DOCTYPE html>
<html>
<?php  include('../config.php'); ?>
<?php include('templates/admin_functions.php'); ?>
<?php include('templates/post_functions.php'); ?>
<?php 
$topics = [['id' => 'united-states', 'name' => 'U.S.'],  ['id' => 'world', 'name' => 'World']];
$authors = getAdminUsers();
?>
<head>
    <title>Create Post | BPR Admin Portal</title>
    <?php include('templates/header.php'); ?>
	<div class="content">
		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Create/Edit Post</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/templates/errors.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<label style="float: left; margin: 5px auto 5px;">Image</label>
				<input type="file" name="featured_image" >
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<label for="sources" style="float: left; margin: 5px auto 5px;">Sources</label>
				<textarea style="resize: vertical;" name="sources" id="sources" cols="30" rows="5"><?php echo $sources; ?></textarea>
				<select name="topic_id">
					<option value="" selected disabled>Choose Category</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['id']; ?>"<?php if( $topic['id'] == $category ): ?> selected="selected"<?php endif; ?>>
							<?php echo $topic['name']; ?>
						</option>
					<?php endforeach ?>
				</select>
				
				<!-- Only admin users can view choose author -->
				<?php if ($_SESSION['user'] && $_SESSION['user']['role'] == "Admin"): ?>
    				<select name="author_id">
    					<option value="" selected disabled>Choose Author</option>
    					<?php foreach ($authors as $author): ?>
    						<option value="<?php echo $author['id']; ?>"<?php if( $author['id'] == $postUser ): ?> selected="selected"<?php endif; ?>>
    							<?php echo $author['name']; ?>
    						</option>
    					<?php endforeach ?>
    				</select>
				<?php endif ?>
				
				<!-- Only admin users can view publish input field -->
				<?php if ($_SESSION['user']['role'] == "Admin"): ?>
					<!-- display checkbox according to whether post has been published or not -->
					<?php if ($published == true): ?>
						<label for="publish">
							Publish
							<input type="checkbox" value="1" name="publish" checked="checked">&nbsp;
						</label>
					<?php else: ?>
						<label for="publish" style="word-wrap:break-word">
							Publish
							<input type="checkbox" value="1" name="publish">
						</label>
					<?php endif ?>
				<?php endif ?>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn gold right" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn gold right" name="create_post">Save Post</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
<?php include('templates/footer.php'); ?>
</html>

<script>
    CKEDITOR.replace('body', {
    
       toolbarGroups: [{
          "name": "basicstyles",
          "groups": ["basicstyles"]
        },
        {
          "name": "links",
          "groups": ["links"]
        },
        {
          "name": "paragraph",
          "groups": ["list", "blocks"]
        },
        {
          "name": "document",
          "groups": ["mode"]
        },
        {
          "name": "insert",
          "groups": ["insert"]
        },
        {
          "name": "styles",
          "groups": ["styles"]
        },
        {
          "name": "about",
          "groups": ["about"]
        }
      ],
      // Remove the redundant buttons from toolbar groups defined above.
      removeButtons: 'Strike,Anchor,Styles,SpecialChar,Source,About'
    });
</script>