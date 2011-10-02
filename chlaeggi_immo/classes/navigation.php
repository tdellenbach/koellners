<?php
/**
 * Klasse für die Navigation
 */
class Navigation{

	/**
	 * Zeigt die Navigation an
	 */	
	public function display(){
		echo '<div id="Navigation">'."\n";
		echo '<ul class="menu">';

		//dynamische Links
		self::createDynamicNavigation();

		//statische Links
    echo "\n".'<li><a href="index.php?view=kontakt" target="_self">Kontakt</a></li>';
    echo "\n".'<li><a href="index.php?view=login" target="_self">Login</a></li>';
		echo "\n".'</ul>';
		echo "\n".'</div>';
	}

	function createDynamicNavigation() {
		//Ordner auslesen
		$dir = './data';
		$files = scandir($dir);

		//oberste Ebene
		for ($tmp=2; $tmp < count($files); $tmp++){
			if (substr($files[$tmp], -4, 1)!='.'){
		    echo "\n".'<li class="drop">';
        echo '<a href="index.php?view='.strtolower($files[$tmp]).'" target="_self">'.ucfirst($files[$tmp]).'</a>';
        echo "\n\t".'<!--[if IE 7]></a><![endif]-->'."\n";

    		//erste Unterebene generieren falls vorhanden
    		if (count(scandir($dir.'/'.$files[$tmp])) > 2){
          echo "\t".'<table>';
          echo "\n\t".'<tr><td>';
					echo '<ul>';
					$undermenu=scandir($dir.'/'.$files[$tmp]);
					for ($tmp2=2; $tmp2 < count($undermenu); $tmp2++){
						if (substr($undermenu[$tmp2], -4, 1) != '.'){
						  	echo "\n\t\t".'<li><a href="index.php?view=list&menu='.strtolower($files[$tmp]).'&region='.strtolower($undermenu[$tmp2]).'" target="_self">'.ucfirst($undermenu[$tmp2]).'</a></li>';
			  		}
					}
          echo "\n\t".'</ul>';
  				echo "\n\t".'</td></tr>';
          echo "\n\t".'</table><!--[if lte IE 6]></a><![endif]-->'."\n";
		    }
       	echo '</li>';
		  }
		}
	}
}
?>
