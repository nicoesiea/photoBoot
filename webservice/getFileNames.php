<?php
	// id_categ
	$res = "";
	$dossier = '../img'; 
	$d = dir($dossier); 
	while ($entry = $d->read()) { 
		if($entry != "." && $entry != ".."){ 
			$lien = $entry; 
			$lien = str_replace('Object ', 'fichiers/', $lien);
			$lien = str_replace('" ', '', $lien);
			if ($res == "") {
				$res = $lien;	
			}
			else {
				$res = $res.",".$lien;
			}
		}
	} 
	echo json_encode($res);
	$d->close();
?>
