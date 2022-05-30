<?php include('../../path.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/users.php'); 
include(ROOT_PATH . './app/helpers/middleware.php');

// adminOnly();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Users</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .msg-success {
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

        .error {
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

          <div class="content">
            <h2 class="title text-center fw-bold">
              Manage Users
            </h2>

            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
            <table class=" table table-hover table-success text-center table-borderless border-dark shadow p-3 mb-5 bg-body rounded-3 cursor-pointer">
              <thead>
                <th>S.No</th>
                <th>Username</th>
                <th>Email</th>

                <th colspan="2">Actions</th>
              </thead>
              <body class="rounded-3">
                <?php foreach ($adminUsers as $key => $user): ?>
                  <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                      <a class="btn btn-info" href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
                    </td>
                    <td>
                      <a class="btn btn-danger" href="index.php?delete_id=<?php echo $user['id']; ?>">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </body>
            </table>
          </div>
        </div>
      </div>
      <script src=""></script>
</body>
</html>