<?php
include_once __DIR__.'/../model/Msale.php';

class SalleControler
{

	

	function index()
	{
		session_start();

		$salle = new Msale();
		$salles=$salle->getSelect();

		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		require_once __DIR__.'/../view/salle.php';
		}else{
			header("location: http://localhost/www/brief%205%20MVC/page");
		}
	}


	function save()
	
	{

		session_start();
		$i = 0;
		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
			if(isset($_POST['submit'])){
				$Libelle=$_POST['libelle'];
				$capacite=$_POST['capacite'];


	
				$salle = new Msale();
				$salle->save($Libelle,$capacite);

				

				
				while(isset($_POST['Libelle'.$i])){
					$salle->save($_POST['Libelle'.$i],$_POST['capacite'.$i]);
					$i++;
				}
				
				header("location: http://localhost/www/brief%205%20MVC/page/salle");
				
			}
		}else{
			header("location: http://localhost/www/brief%205%20MVC/page");
		}
		
	}

	function edit()
	{
		if(isset($_POST['update'])){
			$id=$_POST['updateID'];

			$salle = new Msale();
			$salles=$salle->edit($id);

			require_once __DIR__.'/../view/updateSalle.php';

		}
	}

	function update()
	{
		if(isset($_POST['submit'])){
			$Libelle=$_POST['Libelle'];
			$capacite=$_POST['capacite'];
			$id=$_POST['id'];

			$salle = new Msale();
			$salle->update($Libelle,$capacite,$id);


			header("location: http://localhost/www/brief%205%20MVC/page/salle");

		}
	}

	

	function delete()
	{
		if(isset($_POST['submit'])){
			$id=$_POST['DeleteID'];
			$salle = new Msale();
			$salle->delete($id);

			header("location: http://localhost/www/brief%205%20MVC/page/salle");

		}
		
	}

	
}
