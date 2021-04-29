<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Logo</a>
    <form class="d-flex ">
      <a href="#" class="navbar-brand fs-6">Admine</a><a href="#" class="navbar-brand fs-6">Sing out</a>
    </form>
  </div>
</nav>

<div class="d-flex">


    <div class="col-md-3">
        <ul class="list-group">
        <li class="list-group-item list-group-item-dark " >Salle</li>
        <li class="list-group-item list-group-item-dark">Groupe</li>
        <li class="list-group-item list-group-item-dark disabled" aria-disabled="true">Matiere</li>
        </ul>
    </div>

<div class="col-md-8 m-sm-4 ">
    <h1 class="text-center">Matiere</h1>
    <br>
    <table class="table text-center ">
    <div class="float-right"><button class="btn btn-primary ">Add +</button></div>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Libelle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a href="#" class="btn btn-warning">Update</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a href="#" class="btn btn-warning">Update</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td><a href="#" class="btn btn-warning">Update</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
    </tr>
    
  </tbody>
</table>
        
    
    </div>

</div>
    
</body>
</html>