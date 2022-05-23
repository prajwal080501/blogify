<?php include('./path.php');
include(ROOT_PATH . '/app/database/db.php');

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
  <link href=”./output.css” rel=”stylesheet”>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

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

    .title {
      font-size: 1.5rem;
      font-weight: bold;
      text-decoration: none;
      color: #000;
    }

    .zoom {
      transition: 0.5s ease;
      transform: scale(1.1);
    }

    .img {
      height: 50%;
      width: 50%;
      object-fit: cover;
      border-radius: 50%;
      border: 1px solid red;
      box-shadow: 0 0 5px #f7e6e6;
    }

    .card:hover {
      box-shadow: 0 0 5px #f7e6e6;
      transition: 0.5s ease;
      cursor: pointer;
    }

    .letter{
      font-size: 1.5rem;
      font-weight: bold;
      text-decoration: none;
      color: #000;
      background-color: #f7e6e6;
      width: 80vw;
      margin:auto;
    }
  </style>
</head>

<body>
  <?php include(ROOT_PATH . './app/includes/header.php'); ?>
  <?php include('./app/includes/messages.php'); ?>

  <div class=" hero  bg-dark text-secondary px-4 py-5 text-center rounded-bottom" style="height:50vh; background: url('./assets/images/about.jpg'); background-position:center; object-fit:contain; background-attachment:fixed; background-size:cover; background-repeat:no-repeat;  box-shadow:inset 0 0 0 2000px rgba(145, 145, 145, 0.2);">
    <div class="py-5">

      <h3 class="display-6 fw-bold text-white mt-4 fs-1">About Us</h3>
    </div>
  </div>
  <div class="letter blur-2xl text-center p-5 mt-5 mb-4 shadow-lg fw-lighter" style="border-radius:10px;">
    <h1 class="fw-bold mt-4">About Us </h1>
    <p class="mt-2 p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium maiores animi officiis atque. Fugiat, dignissimos? Dolor voluptatem nesciunt quia molestiae corrupti nihil, quaerat, ullam ipsa eligendi unde sunt quibusdam facilis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus voluptas placeat ipsa molestias neque suscipit numquam culpa totam ratione. Numquam deserunt eaque, exercitationem sapiente reprehenderit illo facere quia at amet odit adipisci quos, delectus possimus. Odio cupiditate suscipit neque nisi!</p>
      

    <p class="fw-bolder mt-4 " style="text-align:right; padding:5px;">Blogify Team</p>
    </div>
  <h1 class="title mt-3" style="text-align: center; padding-top: 10px;margin-top: 10px;">
    Our Team
  </h1>
  <div class="feature-box d-flex justify-content-evenly rounded-top justify-content-center" >
    <!-- bootstrap cards for team members -->
    <!-- <video src="./assets//images/video.mp4" type="video/mp4" style="width:100vw; height:100%"></video> -->
    <div class="">
      <div class="card m-2 py-3 mb-3 shadow rounded" style="width: 18rem;">
        <!-- <img class="img" src="./assets/images/pj.jpg" class="card-img-top" alt="..."> -->
        <img src="https://links.papareact.com/gll" class="w-10 rounded-full h-6 p-2 m-3 border shadow-sm " alt="">
        <div class="card-body">
          <h5 class="card-title fw-bold">Prajwal Ladkat</h5>
          <!-lass="card-text">
            <small>
              <span class="text-primary fw-bold">
                <p>Web Developer | Frontend | Backend</p>

              </span>
            </small>
            <p class="card-text">Prajwal is a student at the University of Pune. He is a software developer and a web developer. He is a very passionate about web development and is always looking to learn new things.</p>
            <!-- github button -->
            <a href="https://github.com/prajwal080501" target="_blank" class="btn btn-primary hover: bg-red-500 transition-all ease-out duration-200">
              <i class="fab fa-github"></i>
              Visit Github
            </a>
        </div>
      </div>
      <div class="card m-2 py-3 mb-3  shadow rounded" style="width: 18rem;">

        <!-- <img class="img" src="./assets/images/pj.jpg" class="card-img-top" alt="..."> -->
        <img src="https://links.papareact.com/gll" class="rounded-full w-6 h-6 p-2 m-3 border shadow-sm" alt="">

        <div class="card-body">
          <h5 class="card-title fw-bold">Vighnesh Chavan</h5>
          <!-lass="card-text">
            <small>
              <span class="text-primary fw-bold">
                <p>Web Developer | Frontend | Backend</p>

              </span>
            </small>
            <p class="card-text">Vighnesh is a student at the University of Pune. He is a software developer and a web developer. He is a very passionate about web development and is always looking to learn new things.</p>
            <!-- github button -->
            <a href="" class="btn btn-primary hover:bg-#ef4444 transition-all duration-200 ease-in rounded">
              <i class="fab fa-github"></i>
              Visit Github
            </a>
        </div>
      </div>
    </div>
    <div>
      <div class="card m-2 py-3 mb-3 shadow rounded" style="width: 18rem;">
        <!-- <img class="img" src="./assets/images/pj.jpg" class="card-img-top" alt="..."> -->
        <img src="https://links.papareact.com/gll" class="rounded-full w-6 h-6 p-2 m-3 border shadow-sm" alt="">

        <div class="card-body">
          <h5 class="card-title fw-bold">Varandeep Bhalla</h5>
            <small>
              <span class="text-primary fw-bold">
                <p>Web Developer | Frontend | Backend</p>

              </span>
            </small>
            <p class="card-text">Varandeep is a student at the University of Pune. He is a software developer and a web developer. He is a very passionate about web development and is always looking to learn new things.</p>
            <!-- github button -->
            <a href="" class="btn btn-primary  rounded">
              <i class="fab fa-github"></i>
              Visit Github
            </a>
        </div>
      </div>
      <div class="card m-2 py-3 mb-3 shadow rounded" style="width: 18rem;">
        <!-- <img class="img" src="./assets/images/pj.jpg" class="card-img-top" alt="..."> -->
        <img src="https://links.papareact.com/gll" class="rounded-full w-6 h-6 p-2 m-3 border shadow-sm" alt="">

        <div class="card-body">
          <h5 class="card-title fw-bold">Keshav Falke</h5>
          <!-lass="card-text">
            <small>
              <span class="text-primary fw-bold">
                <p>Web Developer | Frontend | Backend</p>

              </span>
            </small>
            <p class="card-text">Keshav is a student at the University of Pune. He is a software developer and a web developer. He is a very passionate about web development and is always looking to learn new things.</p>
            <!-- github button -->
            <a href="" class="btn btn-primary  rounded">
              <i class="fab fa-github"></i>
              Visit Github
            </a>
        </div>
      </div>
    </div>
    <!-- About Us -->
   
    
  </div>
 
  <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>
</body>

</html>