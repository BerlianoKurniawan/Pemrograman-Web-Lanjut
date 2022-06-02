<?php

	class MahasiswaInternasional extends Mahasiswa
	{
		public $bahasa;

		//override
		function cetakInfo()
		{
			echo "Registered Number: ",$this->nim,"<br/>";
			echo "Name: ",$this->nama,"<br/>";
			echo "GPA: ",$this->ipk,"<br/>";
			echo "Languange: ",$this->bahasa,"<br/>";
		}
	}
