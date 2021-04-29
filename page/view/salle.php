



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="/../public/material-dashboard.css?v=2.1.2" rel="stylesheet" />

  <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>

<body>


<?php   
//  session_start();
//  die(print_r( ));

?>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Logo</a>
      <form class="d-flex ">
      
        <a href="#" class="navbar-brand fs-6"><i class="material-icons fs-5">person</i> <?php echo $_SESSION['user'][0]['nom']." ". $_SESSION['user'][0]['prenom'] ?></a><a href="http://localhost/www/brief%205%20MVC/page/login/deConnect" class="navbar-brand fs-6"><i class="material-icons fs-5">logout</i> Sing out</a>
      </form>
    </div>
  </nav>

  <div class="d-flex">


    <div class="sidebar col-md-3">
      <ul class="list-group">
        <li class="list-group-item list-group-item-dark disabled" aria-disabled="true"><a href="">Salle</a></li>
        <li class="list-group-item list-group-item-dark"><a href="http://localhost/www/brief%205%20MVC/page/groupe">Groupe</a></li>
        <li class="list-group-item list-group-item-dark"><a href="http://localhost/www/brief%205%20MVC/page/matiere">Matiere</a></li>
      </ul>
    </div>

    <div class="col-md-8 m-sm-4 ">
      <h1 class="text-center">Salle</h1>
      <br>

      <form action="http://localhost/www/brief%205%20MVC/page/salle/save" method="post" id="idForm" class="card card-body">
        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" id="Libelle" name="libelle" class="form-control" placeholder="Libelle" required>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
            <input type="number" id="capacite" name="capacite" class="form-control col-md-6" placeholder="capacite" required>
          </div>&nbsp;&nbsp;
          
          <button onclick="add()" type="button"   class="btn btn-primary "><i class="material-icons">add_circle</i></button>
        </div><br>

        

        <input class="btn btn-info col-md-3" name="submit" type="submit" value="Submit">
      </form><br>

      

      <table class="table text-center ">
        <thead>
          <tr>
            <th >Id</th>
            <th >Libelle</th>
            <th >capacite</th>
            <th >Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($salles as $s){?>
          <tr>
            <th scope="row"><?php echo $s['id']?></th>
            <td><?php echo $s['libelle']?></td>
            <td><?php echo $s['capacity']?></td>
            <td>
              <div class="d-flex">
                <form action="http://localhost/www/brief%205%20MVC/page/salle/edit" method="post">
                  <input type="text" name="updateID" value="<?php echo $s['id']?>" hidden>
                  <button class="btn  btn-warning" name="update" onclick="idUpdate(this)" ><i class="material-icons">update</i></button>
                </form>&nbsp;
                <form action="http://localhost/www/brief%205%20MVC/page/salle/delete" method="post">
                  <input type="hidden" name="DeleteID" value="<?php echo $s['id']?>">
                  <button type="submit" class="btn btn-danger" name="submit"><i class="material-icons">delete_outline</i></button>
                </form>
              </div>

            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>

      <!-- <script>
        function idUpdate(id){
          var x=id.parentNode;
         name=j.parentNode.children[0].innerHTML;
		j.parentNode.children[0].innerHTML="<input type='text' value='"+name+"'>";


    var x=id.parentNode;

        }


      </script> -->


    </div>

  </div>

</body>

<script>

var i = 0;
        function add(){
          var idForm = document.getElementById('idForm');
          var Libelle = document.getElementById('Libelle').value;
          var capacite = document.getElementById('capacite').value;
          
          if(Libelle!='' && capacite!=''){
            idForm.innerHTML += '<div class="d-flex"><div class="col-md-5"><input type="text" name="Libelle'+i+'" class="form-control" value="'+Libelle+'" placeholder="Libelle"></div><div class="col-md-1"></div><div class="col-md-5"><input type="number" name="capacite'+i+'" value="'+capacite+'" class="form-control col-md-6" placeholder="capacite"></div></div>';
            i++;
          }else{
            alert("please enter your data !!");
          }
        }

      </script>


</html>