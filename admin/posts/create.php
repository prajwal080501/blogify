<?php include('../../path.php');
include(ROOT_PATH . '/app/controllers/posts.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Create Posts</title>
  <link rel="stylesheet" href="../../assets/css/admin.css">
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

    .msg-error ul li {
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
        <a class="btn btn-primary mb-3" href="./create.php">Add Post</a>
        <a class="btn btn-primary mb-3  ms-3" href="./index.php">Manage Posts</a>
      </div>

      <div class="content mt-3">
        <h2 class="title text-center fw-bold">
          Add Posts
        </h2>

        <?php include(ROOT_PATH . '/app/helpers/formerrors.php'); ?>
        <form class="" action="create.php" method="post" enctype="multipart/form-data">
          <div class="container mb-4">
            <label for="title" class="" form-label>
              <h5>Title</h5>
            </label>
            <input type="text" name="title" value="<?php echo $title ?>" id="" class="form-control" placeholder="Enter Post Title">
          </div>
          <div class="container mb-4">
            <label for="title" class="" form-label>
              <h5>Body</h5>   
            </label>
            <textarea name="body" id="body" value="" cols="30" rows="20"><?php echo $body ?></textarea>
          </div>
          <label for="image">
            <h5>Add Image</h5>
          </label>
          <input type="file" name="image" class="form-control mb-3">
          <div class="ml-5">
            <label for="">
              <h5>Topic</h5>
              <select name="topic_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                <option value=""></option>
                <?php foreach ($topics as $key => $topic) : ?>
                  <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                    <option selected value="<?php echo $topic['id'] ?>" selected><?php echo $topic['name'] ?></option>
                  <?php else : ?>
                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>  
              </select>
            </label>
          </div>
          <div class="ml-5">
            <?php if(empty($published)): ?>
              <div class="form-check form-switch">
              <input class="form-check-input mb-3" name="published" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Publish</label>
            </div>
            <?php else: ?>
              <div class="form-check form-switch">
              <input class="form-check-input mb-3" checked name="published" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Published</label>
            </div>
            <?php endif; ?>
          </div>
        
            <button class="btn btn-primary" name="add-post" type="submit">Post</button>
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