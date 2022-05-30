<?php include('./path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
    $recentPosts = selectAll('posts', ['published' => 1], 'DESC', '2');
}
include(ROOT_PATH . './app/helpers/middleware.php');
usersOnly();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title'] ?> | Blogify</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card-body {
            padding: 2.5rem;
            line-height: 30px;
            font-family: 'Roboto', sans-serif;
            text-align: left;

        }

        ul>li {
            text-decoration: none;
            list-style: none;
            color: red;
        }
        .title{
            font-size: 1.1rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
            list-style: none;
            text-decoration: none;
            color:black;
        }
    </style>
</head>

<body>
    <?php include('./app/includes/header.php'); ?>
    <!-- display post with formatted styles bootstrap -->
    <div class="container mt-5 d-flex shadow rounded-4 ">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card w-75">
                    <div class="card-header p-3 rounded me-2">
                        <!-- add a audio listner for blog -->
                        <h1 class="mb-3">
                            <?php echo $post['title']; ?>
                        </h1>
                        <!-- display time for posts -->
                        <date class="mt-4 py-5">
                            <?php echo $post['created_at']; ?>
                        </date>


                    </div>
                    <center>
                        <div class="mt-5 m-auto">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="post image" class="img-fluid mb-3 w-75 h-75 rounded shadow">
                        </div>
                    </center>

                    <div class="card-body">
                        <p class="card-text">
                            <?php echo html_entity_decode($post['body']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar mt-3 p-5 w-100">
            <div class="section search w-100">
                <h2 class="section-title">Search</h2>
                <form action="blogs.php" method="post">
                    <input type="text" name="search-term" class="form-control" placeholder="Search">
                </form>
            </div>
            <div class="section topics w-100">
                <h2 class="title mt-3">Topics</h2>
                <ul class="list-group">
                    <?php foreach ($topics as $key => $topic) : ?>
                        <li class="list-group-item list-group-item-action list-group-item-primary rounded-3 shadow-sm mb-2">
                            <a href="<?php echo BASE_URL . './blogs.php?t_id= ' . $topic['id'] ?>">
                                <?php echo $topic['name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- Display Popular posts -->
                <h2 class="title mt-3">Recent Posts</h2>
                <ul class="list-group ">
                    <?php foreach ($recentPosts as $key => $recentPost) : ?>

                        <li class=" d-flex flex-column list-group-item list-group-item-action shadow list-unstyled text-decoration-none list-group-item mt-2 rounded shadow-sm mb-2" style="list-style:none; text-decoration:none;">
                            <!-- display image -->
                            <img class="w-100 d-flex align-self-center rounded" src="<?php echo BASE_URL . '/assets/images/' . $recentPost['image']; ?>" alt="post image" class="img-fluid mb-3 w-25 h-25 rounded shadow">
                            <h5><a class="title text-muted" href="single.php?id=<?php echo $recentPost['id']; ?>">
                                    <?php echo $recentPost['title']; ?>
                                </a></h5>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
    <?php include('./app/includes/footer.php'); ?>
</body>

</html>