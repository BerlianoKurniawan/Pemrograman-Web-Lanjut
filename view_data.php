<?php
	include "Database.php";

	$d = new Database();
	$data = $d->getDataAll();

	$data->setFetchMode(PDO::FETCH_OBJ);
	echo "Jumlah data: ",$data->rowCount(),"<br/>";
	foreach($data as $ddata => $list)
	{
		echo $list->username,"<br/>";
	}
