<?php
	include "Mahasiswa.php";
	include "MahasiswaInternasional.php";

	$mhs = new Mahasiswa("A11.2000.00001","Siswa Tauladani");
	$mhsi = new MahasiswaInternasional("A11.2000.00003","Desiana");
	$mhsi->hitungNilai(50,24);
	$mhsi->bahasa = "Arabic";	
	$mhsi->cetakInfo();

	// if($_POST['status']=='lokal')
	// {
	// 	$mhs = new Mahasiswa($_POST['nim'],$_POST['nama']);
	// }
	// else
	// {
	// 	$mhs = new MahasiswaInternasional($_POST['nim'],$_POST['nama']);
	// }


	$mhs->hitungNilai(60,24);
	
	$mhs2 = new Mahasiswa("A11.2000.00002","John Doe");


	$mhs->cetakInfo();
	echo "<br>";
	$mhs2->hitungNilai(72,24);
	$mhs2->cetakInfo();