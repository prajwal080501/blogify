<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/users.php');
include(ROOT_PATH . './app/helpers/middleware.php');
guestsOnly()


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Signin</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  <link rel="stylesheet" href="./assets/css/login.css">
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

    .msg-error {
       height: auto;
      color: red;
      font-size: 12px;
      background-color: #ffcdd2;
      padding: 5px;
      border-radius: 5px;
      box-shadow: 0 0 5px #ffcdd2;
      margin-bottom: 5px;
      text-align: center;
      margin: 0 auto;
    }
    .msg-error li{
      list-style: none;
      font-size: 1rem;
      text-align: center;

    }
  </style>


  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <main class="form-signin">
    <h1 class="mt-5 mb-3 text-muted fw-bold p-2">Blogify</h1>
    <form action="register.php" method="post">

      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <?php include(ROOT_PATH . '/app/helpers/formerrors.php'); ?>

      
      <div class="form-floating">
        <input name="username" value="<?php echo $username ; ?>" type="text" class="form-control" id="username" placeholder="Enter your username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input name="email" type="email" value="<?php echo $email ; ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" value="<?php echo $password ; ?>" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input name="passwordConf" value="<?php echo $passwordConf ; ?>" type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
        <label for="floatingPassword">Confirm Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>


      <button name="register-btn" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
    </form>
  </main>
</body>

</html>