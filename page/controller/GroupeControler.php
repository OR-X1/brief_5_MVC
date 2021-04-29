<?php


class GroupeControler
{
	function getAllGroupe(){
		
		$groupe = Mgroupe::getSelect();
		
		return $groupe;
        require_once __DIR__.'/../view/groupe.php';
	}
	
	function index()
	{
		require_once __DIR__.'/../view/groupe.php';
	}

	function create()
	{
		require_once __DIR__.'/../view/salle/create.php';
	}

	function save()
	{
		echo 'save';
	}

	function edit($id)
	{
		echo "edit ".$id;
	}

	function update()
	{
		echo 'update';
	}

	function delete()
	{
		echo 'delete';
	}
}
