<?php
require("./models/Curso.php");

$c2 = new Curso("Curso Laravel", "laravel.jpg", "Framework Laravel");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <div class="card" >
                    <img src="./assets/img/angular.png" style="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php $c2->mostrar(); ?></h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
            <div class="card" >
                    <img src="./assets/img/node.png" style="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php $c1->mostrar(); ?></h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img src="./assets/img/javascript.png" style="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 bg-warning">
                <h2>Misión</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quibusdam, error pariatur, odio sunt corrupti accusamus cum cupiditate ratione alias natus dolor sit quisquam enim, modi maxime illum? Animi, obcaecati!</p>
            </div>
            <div class="col-md-6 bg-info">
                <h2>Visión</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quo in animi, fugit quas cumque perspiciatis quisquam ipsum officiis quae maxime, nam hic minima voluptatum libero assumenda quaerat, reprehenderit temporibus?
                Debitis porro ad blanditiis et cum suscipit repellendus, placeat itaque. Ducimus nemo, perspiciatis eligendi, accusamus est sapiente alias natus, eius quas accusantium dicta consequuntur totam. Natus, praesentium consequuntur. Repellat, assumenda?
                Aperiam repellendus quis totam dicta at nobis mollitia quae ipsum voluptatibus, odio impedit. Doloremque, provident nostrum tenetur quisquam fuga rem exercitationem, laudantium cum harum cupiditate voluptates! Autem laboriosam temporibus dolor.</p>
            </div>        
        </div>

    </div>
</body>
</html>