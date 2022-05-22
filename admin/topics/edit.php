<?php include('../../path.php');
include(ROOT_PATH . '/app/controllers/topics.php');
include(ROOT_PATH . './app/helpers/middleware.php');

adminOnly();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Edit Topic</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
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

    .msg-error li {
      list-style: none;
      font-size: 1rem;
      text-align: center;
    }
    </style>
</head>
<body>
<?php include(ROOT_PATH . '/app/includes/header.php'); ?>
      <div class="admin-wrapper">
       <?php include(ROOT_PATH . '/app/includes/sidebar.php'); ?>
        <div class="admin-content">
          <div class="btn-group">
            <a class="btn btn-primary mb-3" href="./create.php">Add Topics</a>
            <a class="btn btn-primary mb-3  ms-3" href="./index.php">Manage Topics</a>
          </div>

          <div class="content mt-3">
            <h2 class="title text-center fw-bold">
              Edit Topics
            </h2>
            <?php include(ROOT_PATH . '/app/helpers/formerrors.php'); ?>
            <form class="" action="edit.php" method="post">
            <div class="container mb-4">
                    <input type="hidden" name="id" value="<?php echo $id ?>" id="" class="form-control" >
                </div>
                <div class="container mb-4">
                    <label for="name" class=""form-label> <h5>Name</h5> </label>
                    <input type="text" name="name" value="<?php echo $name ?>" id="" class="form-control" placeholder="Enter Topic Title">
                </div>
                <div class="container mb-4">
                    <label for="description" class="form-label"> <h5>Description</h5> </label>
                    <textarea name="description" value="" id="body" cols="" rows=""><?php echo $description ?></textarea>
                </div>
                <div class="ml-5">
                    <button class="btn btn-primary" name="update-topic" type="submit">Update Topic</button>
                    </label>
                </div>
            </form>
          </div>
        </div>
      </div>
      <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
      <script src="scripts.js"></script>
</body>
</html>