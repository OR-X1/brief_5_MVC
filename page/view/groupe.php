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

  <style>
    
  </style>

</head>

<body>


  <?php   
//  session_start();


?>

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
        <li class="" aria-disabled="true"><a class="list-group-item list-group-item-dark " href="http://localhost/www/brief%205%20MVC/page/salle">Salle</a></li>
        <li ><a class="list-group-item list-group-item-dark disabled"
            href="">Groupe</a></li>
        <li ><a class="list-group-item list-group-item-dark" href="http://localhost/www/brief%205%20MVC/page/matiere">Matiere</a></li>

        

            <li>
              <button href="" class="btn btn-outline-danger singoutSide fixed-bottom"><i
            class="material-icons fs-5">logout</i> Sing out</button>
            </li>
      </ul>
    </div>

    <div class="col-md-9 m-sm-4 ">
      <h1 class="text-center">Groupe</h1>
      <br>

      <form action="http://localhost/www/brief%205%20MVC/page/groupe/save" method="post" id="idForm"
        class="card card-body">
        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" id="Libelle" name="libelle" class="form-control" placeholder="Libelle" required>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
            <input type="number" min=1 id="effectif" name="effectif" class="form-control col-md-6" placeholder="effectif"
              required>
          </div>&nbsp;&nbsp;

          <button onclick="add()" type="button" class="btn btn-primary "><i
              class="material-icons">add_circle</i></button>
        </div><br>


        <button class="btn btn-success col-md-3" name="submit" type="submit"><i class="material-icons">save</i></button>
        <!-- <input class="btn btn-info col-md-3" name="submit" type="submit" value="Submit"> -->
      </form><br>



      <table class="table text-center ">
        <thead>
          <tr>
            <th>Id</th>
            <th>Libelle</th>
            <th>effectif</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach($groupes as $s){?>
          <tr>
            <th><?php echo $s['id']?></th>
            <td><?php echo $s['libelle']?></td>
            <td><?php echo $s['effectif']?></td>
            <td>

              <div class="d-flex">
              
                <form action="http://localhost/www/brief%205%20MVC/page/groupe/edit" method="post">
                  <input type="text" name="updateID" value="<?php echo $s['id']?>" hidden>
                  <button class="btn  btn-warning update" id="<?php echo 'update'.$i ?>"  name="update" onclick="idUpdate(this)"><i
                      class="material-icons">update</i></button>
                </form>&nbsp;

                <form action="http://localhost/www/brief%205%20MVC/page/groupe/delete" method="post">
                  <input type="hidden" name="DeleteID" value="<?php echo $s['id']?>">
                  <button type="submit" class="btn btn-danger delete" id="<?php echo 'delete'.$i ?>" name="submit"><i
                      class="material-icons">delete_outline</i></button>
                </form>


                <!-- <form action="" method="post">
                  <input type="text" name="updateID" value="<?php //echo $s['id']?>" hidden>
                  <button class="btn  btn-success save" id="<?php //echo 'save'.$i ?>" name="save" onclick="idUpdate(this)"><i
                      class="material-icons">save</i></button>
                </form>&nbsp;
                <form action="" method="post">
                  <input type="hidden" name="DeleteID" value="<?php //echo $s['id']?>">
                  <button type="submit" class="btn btn-warning cancel" id="<?php //echo 'cancel'.$i ?>" name="submit"><i
                      class="material-icons">cancel</i></button>
                </form> -->
              </div>



            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>

      <!-- <script>
        function idUpdate(id) {

          // print_r(id);
          var i = 0;
          // document.getElementByName
          var update = document.getElementsByClassName('update');
            // var delet = document.getElementsByClassName('delete');
            // var save = document.getElementsByClassName('save');
            // var cancel = document.getElementsByClassName('cancel');

            for(i=0;i<update.length;i++){
               update[i].style="display:none";
            delet[i].style="display:none";
            }




          while(update.length){
            var update = document.getElementById('update'+i+'');
            var delete = document.getElementById('delete'+i+'');
            var save = document.getElementById('save'+i+'');
            var cancel = document.getElementById('cancel'+i+'');
            i++;
          }
          
          var Libelle;
          var effectif;
          
          var x = id.parentNode.parentNode.parentNode.parentNode;
          Libelle = x.children[1].innerHTML;
          x.children[1].innerHTML = "<input type='text' value='" +Libelle + "'>";

          effectif = x.children[2].innerHTML;
          x.children[2].innerHTML = "<input type='number' min=1 value='" +effectif + "'>";


          

        }
      </script> -->


    </div>

  </div>

</body>

<script>
  var i = 0;

  function add() {
    var idForm = document.getElementById('idForm');
    var Libelle = document.getElementById('Libelle').value;
    var effectif = document.getElementById('effectif').value;

    if (Libelle != '' && effectif != '') {
      idForm.innerHTML += '<br><div class="d-flex"><div class="col-md-5"><input type="text" disabled="disabled" name="Libelle' + i +
        '" class="form-control" value="' + Libelle +
        '" placeholder="Libelle"></div><div class="col-md-1"></div><div class="col-md-5"><input type="number" disabled="disabled" name="effectif' +
        i + '" value="' + effectif + '" class="form-control col-md-6" placeholder="effectif"></div></div>';
      i++;
    } else {
      alert("please enter your data !!");
    }
  }
</script>


</html>