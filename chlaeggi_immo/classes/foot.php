<?php
/**
 * Klasse für die Kopfzeile
 */
class Foot{

	/**
	 * Zeigt den Kopf der Seite an
	 *
	 * @param int $id Id des gesuchten Eintrags
	 * @return Array Array, dass einen Eintrag repräsentiert, bzw. 
	 * 					wenn dieser nicht vorhanden ist, null.
	 */	
	public function display(){
		$array = stat("index.php");

		echo '<div id="Fusszeile">';

		echo "\n".'<table border="1" width="100%">';
		echo "\n\t".'<tr>';
		echo "\n\t".'<td align="left">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</td>';
		echo "\n\t".'<td align="center">Letzte Aktualisierung:'.date("d.m.Y", $array[9]).'</td>';
		echo "\n\t".'<td align="right"><a href="./index.php">&copy; T.Dellenbach</a></td>';
		echo "\n\t".'</tr>';
		echo "\n".'</table>';
		echo "\n".'</div>';

		echo "\n".'</body>';
		echo "\n".'</html>';
	}
}
?>
