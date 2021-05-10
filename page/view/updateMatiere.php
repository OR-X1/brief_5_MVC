




      <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>

<body>

<?php foreach( $matieres as $s) ?>
<form action="http://localhost/www/brief%205%20MVC/page/matiere/update" method="post" class="card card-body">
        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" name="Libelle" class="form-control" placeholder="Libelle" value="<?php echo $s['libelle']?>">
          </div>
          <div class="col-md-1">
          </div>
          &nbsp;&nbsp;
          <input type="hidden" name="id" value="<?php echo $s['id']?>">

          <button name="submit" class="btn btn-primary ">Edit</button>
        </div>

      </form>


</body>

</html>
