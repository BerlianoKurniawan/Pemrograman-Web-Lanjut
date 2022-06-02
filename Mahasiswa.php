<?php
	class Mahasiswa
	{
		public $nim;
		public $nama;
		protected $ipk;

		function __construct($nim,$nama)
		{
			$this->nim = $nim;
			$this->nama = $nama;	
		}

		function __destruct()
		{
			// echo "Mahasiswa dengan atribut ",$this->nim," dan ", $this->nama, "dihancurkan dari memori";
		}
		
		function hitungNilai($bobot,$sks)
		{
			$this->ipk = round($bobot/$sks,2);
		}
		function cetakInfo()
		{
			echo "NIM : ",$this->nim,"<br/>";
			echo "Nama : ",$this->nama,"<br/>";
			echo "IPK :",$this->ipk;
		}

	}
