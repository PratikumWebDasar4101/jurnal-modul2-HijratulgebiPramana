<?php
	function rekursif($rek){
		global $i;

		rekursif2($i, $rek);
		echo "<br>";
		if(--$rek > $i){
			rekursif($rek);
		}
	}
	function rekursif2($j, $rek){
		global $i;

		if($j>$i -$rek ){
			echo "*";
			rekursif2($j-1, $rek);
		}
	}
	$inputkanr = $_GET["inputkan"];
	$i = 0;
	rekursif($inputkanr);

	//=================================================

	for ($i=1; $i <=$inputkanr ; $i++) {
		if($i %2 ==0){
			$genap[]=$i;
		} else {
			$ganjil[]=$i;
		}
	}	
	echo "genap = ";
	foreach ($genap as $bil_genap) {
		echo $bil_genap. ',';
		
	}
	echo "<br>";
	echo "ganjil";
	foreach ($ganjil as $bil_ganjil) {
		echo $bil_ganjil . ',';
		
	}
	echo "<br> jumlah deret genap =". count($genap) . "<br>";
	echo "jumlah deret ganjil =". count($ganjil);

	?>
