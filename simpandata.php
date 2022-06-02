<?php
	include "Database.php";
	$uname = $_POST['user'];
    	$passwd = $_POST['passwd'];

        $psw = password_hash($passwd,PASSWORD_DEFAULT);
	$d = new Database();
	$data = ['username'=>$uname,
		'passwd'=>$psw,
		'active' => 1
		];
	$d->insertData($data);

	header("Location: form.php");

