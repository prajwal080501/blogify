<?php include('../path.php');
include(ROOT_PATH . '/app/database/db.php');
adminOnly();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Dashboard</title>
  <link rel="stylesheet" href="../assets/css/admin.css">
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
      <div class="content mt-3">
        <h2 class="title text-center fw-bold">
         Dashboard 
        </h2>
        <?php include(ROOT_PATH . '/app/helpers/messages.php'); ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
  <script src="scripts.js"></script>
  <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>

</body>
</html>

