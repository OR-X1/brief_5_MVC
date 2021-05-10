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

      <form action="http://localhost/www/brief%205%20MVC/page/reservation/res3Salle" method="post" id="idForm"
        class="card card-body">
        <div class="d-flex">

        <input type="hidden" name="groupe" value="<?php echo $groupe ?>">
        <input type="hidden" name="dateSeance" value="<?php echo $dateSeance ?>">
 
          <div class="form-group col-md-10">
            <select class="form-control" name="creneauHoraire" id="creneauHoraire">
              <option selected>-- Creneau Horaire --</option>
              <option value="8 - 10" <?php if(in_array("8 - 10",$creneauHoraires)){echo "disabled";} ?>> 8 - 10</option>
              <option value="10 - 12" <?php if(in_array("10 - 12",$creneauHoraires)){echo "disabled";} ?>>10 - 12</option>
              <option value="14 - 16" <?php if(in_array("14 - 16",$creneauHoraires)){echo "disabled";} ?>>14 - 16</option>
              <option value="16 - 18" <?php if(in_array("16 - 18",$creneauHoraires)){echo "disabled";} ?>>16 - 18</option>
            </select>
          </div>&nbsp;&nbsp;
          

          

        </div><br>
        <button class="btn btn-info col-md-3" name="submit" type="submit"><i class="material-icons">navigate_next</i></button>

        <!-- <input class="btn btn-info col-md-3" name="submit" type="submit" value="Submit"> -->
      </form><br>

      <table class="table text-center ">
        <thead>
          <tr>
            <th>Id</th>
            <th>salle</th>
            <th>groupe</th>
            <th>Date Séance</th>
            <th>Creneau Horaire</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($reservations as $s){?>
          <tr>
            <th><?php echo $s['id']?></th>
            <td><?php echo $s['libelleS']?></td>
            <td><?php echo $s['libelleG']?></td>
            <td><?php echo $s['dateSéance']?></td>
            <td><?php echo $s['creneauHoraire']?></td>
            <td>
            
              <div class="d-flex">
                <form action="http://localhost/www/brief%205%20MVC/page/reservation/edit" method="post">
                  <input type="text" name="updateID" value="<?php echo $s['id']?>" hidden>
                  <button class="btn btn-warning update" id="<?php echo 'update'.$i ?>" name="update"
                    onclick="idUpdate(this)"><i class="material-icons">update</i></button>
                </form>&nbsp;
                <form action="http://localhost/www/brief%205%20MVC/page/reservation/delete" method="post">
                  <input type="hidden" name="DeleteID" value="<?php echo $s['id']?>">
                  <button type="submit" class="btn btn-danger delete" id="<?php echo 'delete'.$i ?>" name="submit"><i
                      class="material-icons">delete_outline</i></button>
                </form>

                <!-- <form action="" method="post">
                  <input type="text" name="updateID" value="<?php // echo $s['id']?>" hidden>
                  <button class="btn  btn-success save" id="<?php // echo 'save'.$i ?>" name="save" onclick="idUpdate(this)"><i
                      class="material-icons">save</i></button>
                </form>&nbsp;
                <form action="" method="post">
                  <input type="hidden" name="DeleteID" value="<?php //echo $s['id']?>">
                  <button type="submit" class="btn btn-warning cancel" id="<?php // echo 'cancel'.$i ?>" name="submit"><i
                      class="material-icons">cancel</i></button>
                </form> -->
              </div>

            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>

      <script>
        function idUpdate(id) {

          print_r(id);
          var i = 0;
          document.getElementByName
          var update = document.getElementsByClassName('update');
          // var delet = document.getElementsByClassName('delete');
          // var save = document.getElementsByClassName('save');
          // var cancel = document.getElementsByClassName('cancel');

          for (i = 0; i < update.length; i++) {
            update[i].style = "display:none";
            delet[i].style = "display:none";
          }

          while (update.length) {
            var update = document.getElementById('update' + i + '');
            var delete = document.getElementById('delete' + i + '');
            var save = document.getElementById('save' + i + '');
            var cancel = document.getElementById('cancel' + i + '');
            i++;
          }

          var Libelle;
          var effectif;

          

          var x = id.parentNode.parentNode.parentNode.parentNode;
          Libelle = x.children[1].innerHTML;
          x.children[1].innerHTML = "<input type='text' value='" + Libelle + "'>";

          effectif = x.children[2].innerHTML;
          x.children[2].innerHTML = "<input type='number' min=1 value='" + effectif + "'>";

        }
      </script>


    </div>

  </div>

</body>

<script>
  var i = 0;

  function add() {
    var idForm = document.getElementById('idForm');
    var groupe = document.getElementById('groupe').value;
    var dateSeance = document.getElementById('dateSeance').value;
    var creneauHoraire = document.getElementById('creneauHoraire').value;
    var salle = document.getElementById('salle').value;

    if (groupe != '' && dateSeance != '' && creneauHoraire != '' && salle != '') {
      idForm.innerHTML += '<br><div class="d-flex"><div class="col-md-3"><input type="text" name="groupe' + i + '" disabled="disabled" class="form-control" value="' + groupe + '" ></div>&nbsp;&nbsp; <div class="col-md-2"><input type="text" name="dateSeance' + i + '" disabled="disabled" value="' + dateSeance + '" class="form-control" ></div>&nbsp;&nbsp;  <div class="col-md-2"><input type="number" name="creneauHoraire' + i + '" disabled="disabled" value="' + creneauHoraire + '" class="form-control col-md-3" placeholder="effectif"></div>&nbsp;&nbsp;  <div class="col-md-3"><input type="number" name="salle' + i + '" value="' + salle + '" disabled="disabled" class="form-control col-md-6" placeholder="effectif"></div>      </div>';
      i++;
    } else {
      alert("please enter your data !!");
    }
  }
</script>


</html>