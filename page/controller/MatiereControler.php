<?php
include_once __DIR__.'/../model/Mmatiere.php';

class MatiereControler
{


	function index()
	{
		session_start();
		$matiere = new Mmatiere();
		$matieres=$matiere->getSelect();

		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		require_once __DIR__.'/../view/matiere.php';
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


	
				$matiere = new Mmatiere();
				$matiere->save($Libelle);

				

				
				while(isset($_POST['Libelle'.$i])){
					$matiere->save($_POST['Libelle'.$i]);
					$i++;
				}
				
				header("location: http://localhost/www/brief%205%20MVC/page/matiere");
				
			}
		}else{
			header("location: http://localhost/www/brief%205%20MVC/page");
		}
		
	}

	function edit()
	{
		if(isset($_POST['update'])){
			$id=$_POST['updateID'];

			$matiere = new Mmatiere();
			$matieres=$matiere->edit($id);

			require_once __DIR__.'/../view/updateMatiere.php';

		}
	}

	function update()
	{
		if(isset($_POST['submit'])){
			$Libelle=$_POST['Libelle'];
			$id=$_POST['id'];

			$matiere = new Mmatiere();
			$matiere->update($Libelle,$id);


			header("location: http://localhost/www/brief%205%20MVC/page/matiere");

		}
	}

	

	function delete()
	{
		if(isset($_POST['submit'])){
			$id=$_POST['DeleteID'];
			$matiere = new Mmatiere();
			$matiere->delete($id);

			header("location: http://localhost/www/brief%205%20MVC/page/matiere");

		}
		
	}

	
}
