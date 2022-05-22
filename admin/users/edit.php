<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); 
include(ROOT_PATH . './app/helpers/middleware.php');

adminOnly();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | Edit Users</title>
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
        <a class="btn btn-primary mb-3" href="./create.php">Add Users</a>
        <a class="btn btn-primary mb-3  ms-3" href="./index.php">Manage Users</a>
      </div>

      <div class="content mt-3">
        <h2 class="title text-center fw-bold">
          Edit Users
        </h2>
        <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
        <form class="" action="edit.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Enter username">
          </div>
          <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Enter Email">
          </div>
          <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" value="<?php echo $password ?>" class="form-control" placeholder="Enter Password">
          </div>
          <div class="mb-3">
            <label for="">Confirm Password</label>
            <input type="text" name="passwordConf" value="<?php echo $passwordConf ?>" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="mb-3">
            <label for="">
              <h5>Admin</h5>
              <?php if (isset($admin) && $admin == 1) : ?>
                <input type="checkbox" name="admin" checked>
              <?php else : ?>
                <input type="checkbox" name="admin">
              <?php endif; ?>

            </label>
          </div>
          <div class="ml-5">
            <button class="btn btn-primary" name="update-user" type="submit">Update User</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

  <script src="scripts.js"></script>
</body>

</html>