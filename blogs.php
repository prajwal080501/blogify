<?php include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');
$posts = array();



if (isset($_GET['t_id'])) {
    $posts = getPostsByTopic($_GET['t_id']);
}
else if (isset($_POST['search-term'])) {
    $term = $_POST['search-term'];
    $posts = searchPosts($term);
} else {
    $posts = getPublishedPosts();
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Blogs | Blogify</title>

    <link rel="stylesheet" href="./assets//css/blogs.css">


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
</head>

<body>
    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>
    <div class="container d-flex flex-1">
        <div class="content clearfix">
            <h1 class="title fw-bold">
                <?php if (isset($_POST['search-term'])) {
                    echo 'Search results for: ' . $term;
                } else {
                    echo 'All posts';
                } ?>
            </h1>

            <div class="main-content d-flex w-100 ">
                <div class="container w-100">
                    <div class="row row-cols-2 w-100">
                        <?php foreach ($posts as $post) : ?>
                            <div class="card col me-3 ms-3 mt-3 w-50" style="width: 18rem;">
                                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a class="title" href="./single.php?id=<?php echo $post['id'] ?>">
                                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                    </a>
                                    <!-- Display first 3 lines of post -->
                                    <p class="card-text"><?php echo html_entity_decode(substr(strip_tags($post['body']), 0, 150)) . '...'; ?></p>
                                    <a href="./single.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Read More</a>
                                    <!-- display date and time -->
                                    <p class="card-text"><small class="text-muted">Last updated <?php echo date('F j, Y', strtotime($post['created_at'])); ?></small></p>
                                    <!-- author name -->
                                    <p class="card-text"><small class="text-muted">by <?php echo $post['username']; ?></small></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar mt-3 w-50">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="blogs.php" method="post">
                    <input type="text" name="search-term" class="form-control" placeholder="Search">
                </form>
            </div>
            <div class="section topics">
                <h2 class="title mt-3">Topics</h2>
                <ul class="list-group">
                    <?php foreach ($topics as $key => $topic) : ?>
                        <li class="list-group-item list-group-item-action list-group-item-primary rounded-3 shadow-sm mb-2"  style="list-style:none !important; text-decoration:none !important;">
                            <a href="<?php echo BASE_URL . './blogs.php?t_id= ' . $topic['id'] ?>">
                                <?php echo $topic['name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
    </div>
    <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>