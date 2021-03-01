<!DOCTYPE html>
<html>
<?php include('config.php'); ?>
<?php include('templates/public_functions.php'); ?>
<?php $posts = getCategoryPosts('united-states');
usort($posts, 'sortByOption');
function sortByOption($a, $b) {
    $dateA = new DateTime($a['created_at']);
    $dateB = new DateTime($b['created_at']);
    return strcmp($dateB->getTimestamp(), $dateA->getTimestamp());
}
?>
<head>
    <title>U.S. | Bruin Political Review</title>
    <?php include('templates/header.php'); ?>
                <section id="category_section" class="category_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="category_section united_states">
                                    <div class="article_title header_gold">
                                        <h2>U.S.</h2>
                                    </div>
                                    <?php if(!$posts): ?>
                                        <div style="text-align: center;">
                                            <h1>No Published Articles</h1>
                                        </div>
                                    <?php else: ?>
                                        <?php foreach ($posts as $post): ?>
                                            <?php
                                            $date = new DateTime($post['created_at']);
                                            $formatted = $date->format('M j, Y');
                                            $author = getAuthorName($post['user_id']);
                                            ?>
                                            <!----article_title------>
                                            <div class="category_article_wrapper">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="top_article_img">
                                                            <a href="articles?post-slug=<?php echo $post['slug']; ?>"
                                                                target="_self"><img class="img-responsive left-us-cropped"
                                                                    src="assets/img/<?php echo $post['image']; ?>" alt="feature-top">
                                                            </a>
                                                        </div>
                                                        <!----top_article_img------>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <span class="tag gold">U.S.</span>
                                                        <div class="category_article_title">
                                                            <h2><a href="articles?post-slug=<?php echo $post['slug']; ?>"
                                                                    target="_self"><?php echo $post['title']; ?></a>
                                                            </h2>
                                                        </div>
                                                        <!----category_article_title------>
                                                        <div class="category_article_date author"><?php echo "$author, $formatted"; ?></div>
                                                        <!----category_article_date------>
                                                        <div class="category_article_content">
                                                            <?php echo substr($post['body'], 0, 400); ?>...
                                                        </div>
                                                        <!----category_article_content------>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                                <!-- U.S. News Section -->
                            </div>
                            <!-- Left Section -->
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- Container -->
                </section>
                <!-- Category News Section -->
<?php include('templates/footer.php'); ?>

</html>