<?php
/**
 * Klasse für die Kopfzeile
 */
class Head{

	/**
	 * Zeigt den Kopf der Seite an
	 *
	 * @param int $id Id des gesuchten Eintrags
	 * @return Array Array, dass einen Eintrag repräsentiert, bzw. 
	 * 					wenn dieser nicht vorhanden ist, null.
	 */	
	public function display($title, $height){
    echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">'."\n";
		echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">'."\n";
		echo '<title>'.$title.'</title>'."\n";

    echo '<meta name="description"    content="description">'."\n";
    echo '<meta name="keywords"       content="SELFHTML, HTML, XHTML, Tabellen, Spalten, Zellen, Spalten Zeilen, verbinden, th, td, rowspan, colspan">'."\n";
    echo '<meta name="author"         content="Redaktion SELFHTML, selfhtml81@selfhtml.org">'."\n";
    echo '<meta name="DC.Publisher"   content="SELFHTML e. V.">'."\n";
    echo '<meta name="DC.Date"        content="2005-10-31T12:25:34+01:00">'."\n";
    echo '<meta name="DC.Identifier"  content="http://de.selfhtml.org/html/tabellen/zellen_verbinden.htm">'."\n";
    echo '<meta name="DC.Language"    content="de">'."\n";
    echo '<meta name="DC.Rights"      content="../../editorial/copyright.htm">'."\n";
    echo '<meta name="DC.Date.created" content="2001-10-27T08:00+01:00">'."\n";
    echo '<meta name="SELF.Pagetype"  content="page">'."\n";
    echo '<link rel="stylesheet" type="text/css" href="./style/style.css">'."\n";

		echo '</head>'."\n";
		echo '<body>'."\n\n";

		echo '<div id="Kopfzeile">'."\n";
		echo '<table>'."\n";
		echo '<tr>'."\n\t";
		echo '<td><a href="index.php">';
		echo self::randomImage($height);
		echo '</a></td>'."\n\t".'<td><a href="index.php"><img src="./style/logo_chlaeggi_immo.gif" width="100%" height="'.$height.'"/></a></td>'."\n";
		echo '</tr>'."\n";
		echo '</table>'."\n";
		echo '</div>'."\n\n";
	}

	function randomImage($height) {
		//images path
		$dir = './random_images';
		$folder=scandir($dir);

		//remove any non-images from array
		$tempvar=0;

		for ($i=2;$i < count($folder);$i++){
			$ext=strtolower(substr($folder[$i],-4, 4));
		
			if ($ext==".jpg"||$ext==".gif"||$ext==".png"){
				$pictures[$tempvar]=$folder[$i];
	      			$tempvar++;
			}
		}
	  
		//random
		srand ((double) microtime() * 10000000);
		$rand_keys = array_rand ($pictures, 2);

		//random image from array
		$image=$pictures[$rand_keys[0]]; 

		//name of image for alt text
		$name=substr($image,0,-4);

		//image dimensions
		$dimensions = GetImageSize($dir.'/'.$image);

		//output on page //hier noch link pfad einbauen
		return '<img src="'.$dir.'/'.$image.'" width="'.$height.'" height="'.$height.'" alt="'.$name.' image" />';
	}
}
?>
