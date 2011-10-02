<?php echo "\n\n"; ?>
<div id="Inhalt">
<p>

<img src="./style/neu_Karte_Klettgau_600x600.png" border="0" alt="Klettgau" usemap="#klettgau_map" />
<map name="klettgau_map">
<?php
foreach($this->_['entries'] as $entry){
?>
	<area shape="poly" alt="<?php echo $entry['region']; ?>" href="index.php?view=list&menu=<?php echo $this->_['menu'];?>&region=<?php echo $entry['region']; ?>" coords="<?php echo $entry['mapcoordinates']; ?>" />
<?php
}
?>
</map>
</p>
</div>
