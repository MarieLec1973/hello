<?php 
function getAllAnnonces()
{
	$data = [
        "annonce1" => ["voiture",1000],
        "annonce2" => ["meuble",55]
	];
	return $data;
}

function getFirstAnnonce(){
    $first = current(getAllAnnonces());
    return $first;
}
 ?>


 