<?php

	include 'connect.php';

	$id = $_POST['id'];
	// $id = 3;

	$sql = "SELECT * FROM proses WHERE no = '$id'";
	$query = mysql_query($sql);
	$string = '';
	while ($row = mysql_fetch_array($query, MYSQLI_ASSOC)) {
		$id = $row['no'];
		$merk = $row['merk'];
		$tipe = $row['tipe'];
		$os = $row['os'];
		$dualSim = $row['ds'];
		$memoriInternal = $row['mi'];
		$memoriEksternal = $row['me'];
		$layar = $row['lyr'];
		$ram = $row['ram'];
		$prosessor = $row['cp'];
		$kameraPrimer = $row['kp'];
		$kameraSekunder = $row['ks'];
		$baterai = $row['bat'];
		$durability = $row['dr'];
		$harga = $row['hrg'];
		$string .= $id."|".$merk."|".$tipe."|".$os."|".$dualSim."|".$memoriInternal."|".$memoriEksternal."|".$layar."|".$ram."|".$prosessor."|".$kameraPrimer."|".$kameraSekunder."|".$baterai."|".$durability."|".$harga."||";
	}
	echo $string;

?>		