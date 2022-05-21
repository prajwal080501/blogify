<?php include('../../path.php');
include(ROOT_PATH . '/app/controllers/topics.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Posts</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>

<?php include(ROOT_PATH . '/app/includes/header.php'); ?>

    <div class="admin-wrapper">
        <?php include(ROOT_PATH . '/app/includes/sidebar.php'); ?>

        <div class="admin-content">
            <div class="btn-group">
                <a class="btn btn-primary mb-3" href="./create.php">Add Topic</a>
                <a class="btn btn-primary mb-3  ms-3" href="./index.php">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="title text-center fw-bold">
                    Manage Topics
                </h2>
                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                <table class=" table table-hover table-success text-center table-borderless border-dark shadow p-3 mb-5 bg-body rounded-3 cursor-pointer">
                    <thead>
                        <th>S.No</th>
                        <th>Name</th>
                        <th colspan="2">Actions</th>
                    </thead>

                    <body class="rounded-3">
                        <?php foreach ($topics as $key => $topic) : ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="edit.php?id=<?php echo $topic['id']; ?>">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="index.php?del_id=<?php echo $topic['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <tr>
                        <?php endforeach; ?>
                    </body>
                </table>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>