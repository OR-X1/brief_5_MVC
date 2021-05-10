<?php
include_once __DIR__.'/../model/Mgroupe.php';

class GroupeControler
{


	function index()
	{
		session_start();

		$groupe = new Mgroupe();
		$groupes=$groupe->getSelect();

		if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
		require_once __DIR__.'/../view/groupe.php';
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
				$effectif=$_POST['effectif'];


	
				$groupe = new Mgroupe();
				$groupe->save($Libelle,$effectif);

				

				
				while(isset($_POST['Libelle'.$i])){
					$groupe->save($_POST['Libelle'.$i],$_POST['effectif'.$i]);
					$i++;
				}
				
				header("location: http://localhost/www/brief%205%20MVC/page/groupe");
				
			}
		}else{
			header("location: http://localhost/www/brief%205%20MVC/page");
		}
		
	}

	function edit()
	{
		if(isset($_POST['update'])){
			$id=$_POST['updateID'];

			$groupe = new Mgroupe();
			$groupes=$groupe->edit($id);

			require_once __DIR__.'/../view/updateGroupe.php';

		}
	}

	function update()
	{
		if(isset($_POST['submit'])){
			$Libelle=$_POST['Libelle'];
			$effectif=$_POST['effectif'];
			$id=$_POST['id'];

			$groupe = new Mgroupe();
			$groupe->update($Libelle,$effectif,$id);


			header("location: http://localhost/www/brief%205%20MVC/page/groupe");

		}
	}

	

	function delete()
	{
		if(isset($_POST['submit'])){
			$id=$_POST['DeleteID'];
			$groupe = new Mgroupe();
			$groupe->delete($id);

			header("location: http://localhost/www/brief%205%20MVC/page/groupe");

		}
		
	}

	
}
