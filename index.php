<?php
require "function.php";
$resultat = getAllAnnonces();

?>
 <ul>
 	<li><?php echo $resultat["annonce1"][0] ?></li>
 	<li><?php echo $resultat["annonce1"][1] ?></li>
 </ul>