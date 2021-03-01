<!DOCTYPE html>
<html>
<?php  include('config.php'); ?>
<?php  include('templates/public_functions.php'); ?>
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
?>
<head>
    <title><?php echo (($post) ? $post['title'] : "Not Found"); ?> | Bruin Political Review</title>
    <?php include('templates/header.php'); ?>
                <section id="entity_section" class="entity_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="entity_wrapper">
                                    <?php if(!$post): ?>
                                        <div style="text-align: center;">
                                            <h1>Sorry, this article does not exist!</h1>
                                        </div>
                                    <?php else: ?>
                                        <div class="entity_title">
                                            <h1><?php echo $post['title']; ?></h1>
                                        </div>
                                        <!-- entity_title -->
                                        <div class="entity_meta">       
                                            <?php
                                            $date = new DateTime($post['created_at']);
                                            $formatted = $date->format('M j, Y');
                                            $author = getAuthorName($post['user_id']);
                                            echo "$author, $formatted";
                                            ?>
                                        </div>
                                        <!-- entity_meta -->
                                        <div class="entity_thumb">
                                            <img class="img-responsive" src="assets/img/<?php echo $post['image']; ?>" alt="feature-top">
                                        </div>
                                        <!-- entity_thumb -->
                                        <div class="entity_content">
                                            <?php 
                                            
                                            $paragraphedText = "<p>" . implode( "</p>\n\n<p>", preg_split( '/\n(?:\s*\n)+/', $post['body'] ) ) . "</p>";
                                            echo html_entity_decode($paragraphedText);
                                            ?>
                                        <p></p>
                                        </div>
                                        <div class="entity_sources">
                                            <h1>Sources</h3>
                                        </div>
                                        <div class="entity_content">                <?php 
                                            $separatedSources = "<p>" . implode( "<br>", preg_split( '/\n+/', $post['sources'] ) ) . "</p>";
                                            echo html_entity_decode($separatedSources);
                                            ?>
                                        </div>
                                        <!-- entity_content -->
                                        <div class="entity_footer">
                                            <div class="entity_tag">
                                                <?php
                                                $category = $post['category'];
                                                if ($category == 'world') {
                                                    $display = 'World';
                                                } else {
                                                    $display = 'U.S.';
                                                }
                                                ?>
                                                <span class="blank"><a href="<?php echo $category; ?>">
                                                    <?php echo $display; ?></a></span>
                                            </div>
                                            <!-- entity_tag -->
                                        </div>
                                        <!-- entity_footer -->
                                    <?php endif ?>
                                </div>
                                <!-- entity_wrapper -->
                            </div>
                            <!--Left Section-->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!-- Entity Section Wrapper -->
<?php include('templates/footer.php'); ?>

</html>