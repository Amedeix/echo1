<?php

echo "Ciao :) </br> Ecco tutte le info. </br> Buona fortuna.";
echo "<table>";
foreach ($_SERVER as $key=>$item){
	echo "<tr>";
    echo "<td><b>$key</b></td><td>$item </td>";
	echo "</tr>";
}
echo "</table>";
?>
