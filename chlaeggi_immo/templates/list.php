<?php echo "\n\n"; ?>
<div id="Inhalt">
<p>
<h1>Angebote f&uuml;r diese Gemeinde</h1>

<?php
foreach($this->_['entries'] as $entry){
?>
<p>
	<?php echo 'Strasse: '.$entry['strasse']; ?>
	<?php echo 'PLZ: '.$entry['plz']; ?>
	<?php echo 'Ort: '.$entry['ort']; ?>
	<?php echo 'Fl&auml;che: '.$entry['flaeche']; ?>
	<?php echo 'Preis: '.$entry['preis']; ?>
	<?php echo 'Beschreibung: '.$entry['beschreibung']; ?>
	<?php echo 'Pfad: '.$entry['pfad']; ?>
</p>

<?php
}
?>

</p>
</div>
