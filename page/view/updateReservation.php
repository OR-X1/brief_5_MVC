<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="/../public/material-dashboard.css?v=2.1.2" rel="stylesheet" />

  <link rel="stylesheet" href="/../public/style.css">

  <link rel="stylesheet" href="http://localhost/www/brief 5 MVC/page/public/styleSass.css">

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Rhazlani Dashboard</a>
      <form class="d-flex ">

        <a href="#" class="navbar-brand fs-6"><i class="material-icons fs-5">person</i>
          <?php echo $_SESSION['user'][0]['nom']." ". $_SESSION['user'][0]['prenom'] ?></a><a
          href="http://localhost/www/brief%205%20MVC/page/login/deConnect" class="navbar-brand fs-6"><i
            class="material-icons fs-5">logout</i> Sing out</a>
      </form>
    </div>
  </nav>

  <div class="d-flex">

    <div class="sidebar col-md-3">
      <ul class="list-group">
        <li class=""><a class="list-group-item list-group-item-dark disabled" href="">Reservation</a></li>

        <li>
          <button href="" class="btn btn-outline-danger singoutSide fixed-bottom"><i
              class="material-icons fs-5">logout</i> Sing out</button>
        </li>
      </ul>
    </div>

    <div class="col-md-9 m-sm-4 ">
      <h1 class="text-center">Reservation</h1>
      <br>

      <form action="http://localhost/www/brief%205%20MVC/page/reservation/res2CreneauHoraire" method="post" id="idForm"
        class="card card-body">
        <div class="d-flex">

          <div class="form-group col-md-5">
            <select class="form-control" name="groupe"  id="groupe">
              <option selected>  -- Groupe --  </option>

              <?php foreach($groupes as $g) { ?>
              <option  value="<?php echo $g['id'] ?>"><?php echo $g['libelle'] ?></option>
              <?php } ?>

            </select>
          </div>&nbsp;&nbsp;

          <div class="col-md-5">
            <input type="date" id="dateSeance" name="dateSeance" class="form-control" placeholder="Date Séance"
              required>
          </div>

        </div><br>
        <button class="btn btn-info col-md-3" name="submit" type="submit"><i class="material-icons">navigate_next</i></button>

      </form><br>




    </div>

  </div>

</body>



</html>