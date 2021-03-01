<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getCategoryPosts($category) {
    if ($category != 'united-states' && $category != 'world') {
        return getPublishedPosts();
    }
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE category='$category' AND published=true";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getAuthorName($userId) {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM users WHERE id=$userId";
	$result = mysqli_query($conn, $sql);
	if ($result) {
	    // fetch all posts as an associative array called $posts
	    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	    return $posts[0]['name'];
	} else {
	    return "Anonymous";
	}
}

function getPost($slug){
	global $conn;
	// Get single post slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($conn, $sql);

	// fetch query results as associative array.
	$post = mysqli_fetch_assoc($result);
	return $post;
}
?>