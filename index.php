<?php include('./path.php');
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . './app/helpers/middleware.php');


$posts = getPublishedPosts();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Blogify</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./home.css">
    <script src="./assets/js/scripts.js"></script>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .success {
            color: green;
            font-size: 12px;
            background-color: #e6f7e6;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 5px #e6f7e6;
            margin-bottom: 5px;
            text-align: center;
            margin: 0 auto;
            box-shadow: 0 0 5px #e6f7e6;
        }

        .success li {
            list-style: none;
            font-size: 1rem;
            text-align: center;
        }

        .msg-error {
            color: red;
            font-size: 12px;
            background-color: #f7e6e6;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 5px #f7e6e6;
            margin-bottom: 5px;
            text-align: center;
            margin: 0 auto;
            box-shadow: 0 0 5px #f7e6e6;
        }
        .msg-success{
            color: green;
            font-size: 12px;
            background-color: #e6f7e6;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 0 5px #e6f7e6;
            margin-bottom: 5px;
            text-align: center;
            margin: 0 auto;
            box-shadow: 0 0 5px #e6f7e6;
        }
        .title{
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }
        .zoom{
            transition: 0.5s ease;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <?php include(ROOT_PATH . './app/includes/header.php'); ?>
    <?php include('./app/includes/messages.php'); ?>

    <div class=" hero bg-dark text-secondary px-4 py-5 text-center rounded-bottom -lg" style="background: url('./assets/images/bg.jpg'); background-position:center; object-fit:contain; background-attachment:fixed; background-size:cover; background-repeat:no-repeat;  box-shadow:inset 0 0 0 2000px rgba(145, 145, 145, 0.2);">
        <div class="py-5">

            <h3 class="display-6 fw-bold text-white">Blogify a Blog Website For Computer Geeks.</h3>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4 text-white " style="opacity:0.5;">Learn Data Structures and Algorithms Online at Your Own Pace with Blogify.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="<?php echo BASE_URL . '/blogs.php' ?>" type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold shadow">View Blogs</a>
                    <a class="btn btn-outline-light btn-lg px-4 shadow" href="<?php echo BASE_URL . "./contact.php" ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="title" style="text-align: center; padding-top: 10px;margin-top: 10px;">
        Recent Posts
    </h1>
    <div class="feature-box d-flex justify-content-evenly rounded-top ">

        <!-- display onlty 3 records from the database -->
        <?php $i = 3; ?>
        <?php foreach ($posts as $post) : ?>
            <?php if ($i > 0) : ?>
                <div class="card mt-2 mb-3 h-fit-content shadow rounded bg-slate-900" style="width:28rem">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class="title" href="./single.php?id=<?php echo $post['id'] ?>"><h5 class="card-title"><?php echo $post['title']; ?></h5></a>
                        <!-- Display first 3 lines of post -->
                        <p class="card-text"><?php echo html_entity_decode(substr(strip_tags($post['body']), 0, 150)) . '...'; ?></p>
                        <a href="./single.php?id=<?php echo $post['id'] ?>" class="btn btn-primary hover:bg-red-600">Read More</a>
                        <!-- display date and time -->
                        <p class="card-text mt-3"><small class="text-muted">Last updated <b><?php echo $post['created_at']; ?></b> </small></p>
                        <!-- author name -->
                        <p class="card-text"><small class="text-muted"><i class="fa-solid fa-user"></i>Author: <span class="text-primary"><?php echo $post['username']; ?></span> </small></p>
                    </div>
                </div>
                <?php $i--; ?>
            <?php endif; ?>
        <?php endforeach; ?>


    </div>
    <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>
    <script>
        // Add zoom effect to div with class .hero on scroll
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 50) {
                $(".hero").addClass("zoom");
            } else {
                $(".hero").removeClass("zoom");
            }
        });
    </script>
</body>

</html>