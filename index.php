<!DOCTYPE html>
<html>
<?php include('config.php'); ?>
<?php include('templates/public_functions.php'); ?>
<?php $posts = getPublishedPosts();
usort($posts, 'sortByOption');
function sortByOption($a, $b) {
    $dateA = new DateTime($a['created_at']);
    $dateB = new DateTime($b['created_at']);
    return strcmp($dateB->getTimestamp(), $dateA->getTimestamp());
}
if (count($posts) >= 3) {
    $recent_posts = array_slice($posts, 0, 3);
    $recent_us = 0;
    $recent_world = 0;
    foreach($recent_posts as $post) {
        if ($post['category'] == 'world') {
            $recent_world++;
        } else if ($post['category'] == 'united-states') {
            $recent_us++;
        }
    }
}
?>
<?php $unfiltered_us_posts = getCategoryPosts('united-states');
$unfiltered_world_posts = getCategoryPosts('world');
usort($unfiltered_us_posts, 'sortByOption');
usort($unfiltered_world_posts, 'sortByOption');
$us_posts = array_slice($unfiltered_us_posts, $recent_us, count($unfiltered_us_posts));
$world_posts = array_slice($unfiltered_world_posts, $recent_world, count($unfiltered_world_posts));
?>
<head>
    <title>Home | Bruin Political Review</title>
    <?php include('templates/header.php'); ?>
                <section id="feature_news_section" class="feature_news_section">
                    <div class="container">
                        <div class="row">
                            <?php if(!$recent_posts): ?>
                                <div style="text-align: center;">
                                    <h1>No Published Articles</h1>
                                </div>
                            <?php else: ?>
                                <?php
                                    $date0 = new DateTime($recent_posts[0]['created_at']);
                                    $formatted0 = $date0->format('M j, Y');
                                    $author0 = getAuthorName($recent_posts[0]['user_id']);
                                    $date1 = new DateTime($recent_posts[1]['created_at']);
                                    $formatted1 = $date1->format('M j, Y');
                                    $author1 = getAuthorName($recent_posts[1]['user_id']);
                                    $date2 = new DateTime($recent_posts[2]['created_at']);
                                    $formatted2 = $date2->format('M j, Y');
                                    $author2 = getAuthorName($recent_posts[2]['user_id']);
                                ?>
                                <div class="col-md-7">
                                    <div class="feature_article_wrapper">
                                        <div class="feature_article_img" style="background-image: url('assets/img/daca_rally.jpg');">
                                            <img class="img-responsive top_static_article_img top-center-cropped"
                                                src="assets/img/<?php echo $recent_posts[0]['image']; ?>" alt="feature-top">
                                        </div>
                                        <!-- feature_article_img -->
                                        <div class="feature_article_inner">
                                            <div class="tag_lg navy">Featured</div>
                                            <div class="feature_article_title">
                                                <h1><a href="articles?post-slug=<?php echo $recent_posts[0]['slug']; ?>" target="_self"><?php echo $recent_posts[0]['title']; ?></a></h1>
                                            </div>
                                            <!-- feature_article_title -->
                                            <div class="feature_article_date author"><?php echo "$author0, $formatted0"; ?>
                                            </div>
                                            <br>
                                        </div>
                                        <!-- feature_article_inner -->
                                    </div>
                                    <!-- feature_article_wrapper -->
                                </div>
                                <!-- col-md-7 -->
                                <div class="col-md-5">
                                    <div class="feature_static_wrapper">
                                        <div class="feature_article_img" style="background-image: url('assets/img/daca_rally.jpg');">
                                            <img class="img-responsive right-center-cropped" src="assets/img/<?php echo $recent_posts[1]['image']; ?>"
                                                alt="feature-top">
                                        </div>
                                        <!-- feature_article_img -->
                                        <div class="feature_article_inner">
                                            <div class="tag_lg navy">Recent</div>
                                            <div class="feature_article_title">
                                                <h1><a href="articles?post-slug=<?php echo $recent_posts[1]['slug']; ?>" target="_self"><?php echo $recent_posts[1]['title']; ?></a>
                                                </h1>
                                            </div>
                                            <!-- feature_article_title -->
                                            <div class="feature_article_date author"><?php echo "$author1, $formatted1"; ?>
                                            </div>
                                            <!-- feature_article_date -->
                                            <br>
                                        </div>
                                        <!-- feature_article_inner -->
                                    </div>
                                    <!-- feature_static_wrapper -->
                                </div>
                                <!-- col-md-5 -->
                                <div class="col-md-5">
                                    <div class="feature_static_last_wrapper">
                                        <div class="feature_article_img" style="background-image: url('assets/img/whiteHouse.jpg');">
                                            <img class="img-responsive right-center-cropped" src="assets/img/<?php echo $recent_posts[2]['image']; ?>" alt="feature-top">
                                        </div>
                                        <!-- feature_article_img -->
                                        <div class="feature_article_inner">
                                            <div class="tag_lg navy">Recent</div>
                                            <div class="feature_article_title">
                                                <h1><a href="articles?post-slug=<?php echo $recent_posts[2]['slug']; ?>" target="_self"><?php echo $recent_posts[2]['title']; ?></a></h1>
                                            </div>
                                            <!-- feature_article_title -->
                                            <div class="feature_article_date author"><?php echo "$author2, $formatted2"; ?>
                                            </div>
                                            <!-- feature_article_date -->
                                            <br>
                                        </div>
                                        <!-- feature_article_inner -->
                                    </div>
                                    <!-- feature_static_wrapper -->
                                </div>
                                <!-- col-md-5 -->
                            <?php endif ?>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- container -->
                </section>
                <!-- Feature News Section -->
                <section id="category_section" class="category_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($us_posts): ?>
                                    <div class="category_section united_states">
                                        <div class="article_title header_gold">
                                            <h2><a href="united-states.php">U.S.</a></h2>
                                        </div>
                                        <?php foreach (array_slice($us_posts, 0, 5) as $post): ?>
                                        
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
                                        <p class="divider"><a href="united-states.php">Read More&nbsp;&raquo;</a></p>
                                    </div>
                                <?php endif ?>
                                <!-- U.S. News Section -->
                                <?php if($world_posts): ?>
                                    <div class="category_section world">
                                        <div class="article_title header_blue">
                                            <h2><a href="world.php">World</a></h2>
                                        </div>
                                            <?php foreach (array_slice($world_posts, 0, 5) as $post): ?>
                                            
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
                                                            <span class="tag blue">World</span>
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
                                        <p class="divider"><a href="world.php">Read More&nbsp;&raquo;</a></p>
                                    </div>
                                <?php endif ?>
                                <!-- World News Section -->
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