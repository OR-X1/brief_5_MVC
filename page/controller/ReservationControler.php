<?php
include_once __DIR__.'/../model/Mreservation.php';
include_once __DIR__.'/../model/Mmatiere.php';
include_once __DIR__.'/../model/Mgroupe.php';
include_once __DIR__.'/../model/Msale.php';

class ReservationControler
{
	function index()
	{
		session_start();

		$reservation = new Mreservation();
		$reservations=$reservation->getSelect();

		$matiere = new Mmatiere();
		$matieres=$matiere->getSelect();

		$salle = new Msale();
		$salles=$salle->getSelect();

		$groupe = new Mgroupe();
		$groupes=$groupe->getSelect();

		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			require_once __DIR__.'/../view/reservation.php';
		}else{
			header("location: http://localhost/www/brief%205%20MVC/page");
		}
	}

	function res2CreneauHoraire(){
		session_start();
		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			if(isset($_POST['submit'])){
				$groupe=$_POST['groupe'];
				$dateSeance=$_POST['dateSeance'];

				$reservation = new Mreservation();
		$reservations=$reservation->getSelect();
				
				$creneauHoraire = new Mreservation();
				$creneauHoraires=$creneauHoraire->res2CreneauHoraire($groupe,$dateSeance);
				
				// header("location: http://localhost/www/brief%205%20MVC/page/reservation");
				require_once __DIR__.'/../view/res2CreneauHoraire.php';
				}
				}else{
					header("location: http://localhost/www/brief%205%20MVC/page");
				}
	}

	function res3Salle(){
		session_start();
		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			if(isset($_POST['submit'])){
				$groupe=$_POST['groupe'];
				$dateSeance=$_POST['dateSeance'];
				$creneauHoraire=$_POST['creneauHoraire'];

				$reservation = new Mreservation();
		$reservations=$reservation->getSelect();

				$res3Salle = new Mreservation();
				$res3Salles=$res3Salle->res3Salle($groupe,$dateSeance,$creneauHoraire);

				$res3Salle = new Msale();
				$FilterSalles=$res3Salle->getSelectSalleFilter($res3Salles);
				
				
				require_once __DIR__.'/../view/res3Salle.php';
				}
				
	}
}


	function save()
	{

		session_start();
		$i = 0;
		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			if(isset($_POST['submit'])){
				$groupe=$_POST['groupe'];
				$dateSeance=$_POST['dateSeance'];
				$creneauHoraire=$_POST['creneauHoraire'];
				$salle=$_POST['salle'];

				$reservation = new Mreservation();
				$reservation->save($groupe,$dateSeance,$creneauHoraire,$salle);

				
				
				header("location: http://localhost/www/brief%205%20MVC/page/reservation");
				
				}
				}else{
					header("location: http://localhost/www/brief%205%20MVC/page");
				}
	}

	function edit()
	{
		if(isset($_POST['update'])){
			$id=$_POST['updateID'];

			$reservation = new Mreservation();
			$reservations=$reservation->edit($id);

			require_once __DIR__.'/../view/updateReservation.php';

		}
	}

	function update()
	{
		if(isset($_POST['submit'])){
			$Libelle=$_POST['Libelle'];
			$id=$_POST['id'];

			$reservation = new Mreservation();
			$reservation->update($Libelle,$id);


			header("location: http://localhost/www/brief%205%20MVC/page/reservation");

		}
	}

	

	function delete()
	{
		if(isset($_POST['submit'])){
			$id=$_POST['DeleteID'];
			$reservation = new Mreservation();
			$reservation->delete($id);

			header("location: http://localhost/www/brief%205%20MVC/page/reservation");

		}
	}
}