<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel ="stylesheet" href="/css/style.css">
    

    <title>Lana Del Rey </title>
  </head>
  <body>
 <!-- Awal navigasi bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

 <div class="container">
  <a class="navbar-brand font-weight-bold" href="<?= base_url('auth/index'); ?>">Lana Del Rey</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('auth/index'); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/login'); ?>">Log out</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/admin'); ?>">Admin</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<!-- Akhir navigation bar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center text-white ">
  <img src="/img/gigit.jpg" width="200px"class="rounded">
   <h1 class="display-4font-weight-bold">Lana Del Rey</h1>
    <p class="lead">The Queen Of Alternative</p>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- discography -->
<h3 class="text-center font-weight-bold">Lana Del Rey Discography</h3>

<div class="container">
<div class="card" style="width: 18rem;">
  <img src="/img/btd.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Born To Die</h5>
    <p class="card-text">Born to Die is the second studio album and major label debut by American singer-songwriter Lana Del Rey. It was released on January 27, 2012, through Interscope Records and Polydor Records. The album was reissued on November 9, 2012, as an expanded version subtitled The Paradise Edition</p>
    <a href="<?= base_url('auth/disco'); ?>" class="btn btn-primary">More</a>
  </div>
</div>
</div>

<!-- discography -->

 
   

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>