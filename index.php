<?php 

	class Hewan {
		public $jumlah_kaki;
		function bersuara(){
			return "bersuara";
		}
	}
	class Kucing extends Hewan {
		public $bisa_terbang = "Tidak bisa terbang";
		function bersuara(){
			return "Meong";
		}	
	}
	class Anjing extends Hewan {
		public $bisa_terbang = "Tidak bisa terbang";
		function bersuara(){
			return "Guk Guk";
		}
	}
	class Elang extends Hewan {
		public $bisa_terbang = "Bisa terbang";
		function bersuara(){
			return "Hikk";
		}
	}
	class Angsa extends Hewan {
		public $bisa_terbang = "Bisa terbang";
		function bersuara(){
			return "Kweek";
		}
	}









	$momo = new Kucing;
	$momo->jumlah_kaki = 4;
	echo "Momo adalah seekor Kucing <br>";
	echo "Momo memiliki kaki sebanyak : ".$momo->jumlah_kaki."<br>";
	echo$momo->bisa_terbang."<br>";
	echo "Suara : ".$momo->bersuara()."<br>";

	echo "<hr>";

	$doggo = new Anjing;
	$doggo->jumlah_kaki = 4;
	echo "Doggo adalah seekor Anjing <br>";
	echo "Doggo memiliki kaki sebanyak : ".$doggo->jumlah_kaki."<br>";
	echo $doggo->bisa_terbang."<br>";
	echo "Suara : ".$doggo->bersuara()."<br>";

	echo "<hr>";

	$zya = new Elang;
	$zya->jumlah_kaki = 2;
	echo "Zya adalah seekor Elang <br>";
	echo "Zya memiliki kaki sebanyak : ".$zya->jumlah_kaki."<br>";
	echo $zya->bisa_terbang."<br>";
	echo "Suara : ".$zya->bersuara()."<br>";

	echo "<hr>";

	$masha = new Angsa;
	$masha->jumlah_kaki = 2;
	echo "Masha adalah seekor Angsa <br>";
	echo "Masha memiliki kaki sebanyak : ".$masha->jumlah_kaki."<br>";
	echo $masha->bisa_terbang."<br>";
	echo "Suara : ".$masha->bersuara()."<br>";

	echo "<hr>";	
 ?>