<?php
echo '<html>';
echo '<head>';
echo '<title>CHLAEGGI IMMO - Ihr Partner im Klettgau</title>';
echo '<link rel="stylesheet" type="text/css" href="style/style.css">';
echo '</head>';
echo '<body>';

pictureInit();

echo '</body>';
echo '</html>';
?>

<?php
function pictureInit($dir){
echo '<p>';
echo '<img src="../style/neu_Karte_Klettgau_600x600.png" border="0" alt="Klettgau" usemap="#klettgau_map" />';
echo '<map name="klettgau_map">';

//Ordner auslesen
if($dir ==""){
	$dir = '../data/Bauland';
}

$files = scandir($dir);

//einzelne map Elemente hinzufügen
for ($tmp=0; $tmp <= count($files); $tmp++){
	switch ($files[$tmp]) {
	    case "hallau":
		hallau();
		break;
	    case "ruedlingen":
		ruedlingen();
		break;
	    case "trasadingen":
		trasadingen();
		break;
	    case "wilchingen":
		wilchingen();
		break;
	    case "guntmadingen":
		guntmadingen();
		break;
	    case "siblingen":
		siblingen();
		break;
	    case "beringen":
		beringen();
		break;
	    case "beggingen":
		beggingen();
		break;
	    case "loehningen":
		loehningen();
		break;
	    case "neunkirch":
		neunkirch();
		break;
	    case "schleitheim":
		schleitheim();
		break;
	    case "gaechlingen":
		gaechlingen();
		break;
	    case "oberhallau":
		oberhallau();
		break;
	    case "buchberg":
		buchberg();
		break;
	    default:
		break;
	}
}

echo '</map>';
echo '</p>';
}
?>

<?php
function hallau (){
	echo '<area shape="poly" alt="Hallau" href="hallau" coords="64,264,116,253,144,255,168,271,232,244,224,233,194,206,163,160,124,177,104,180,76,196,54,199,19,221,28,234" />';
}
?>

<?php
function ruedlingen (){
  echo '<area shape="poly" alt="Rüdlingen" href="rüdlingen" coords="489,534,437,520,438,511,404,503,448,488,466,476,505,485,562,459,550,482,516,492,505,514,510,528" />';
}
?>

<?php
function trasadingen (){
  echo '<area shape="poly" alt="Trasadingen" href="trasadingen" coords="46,305,22,288,30,276,60,268,70,272,118,297,120,318,148,337,115,330,103,316,76,304" />';
}
?>

<?php
function wilchingen (){
  echo '<area shape="poly" alt="Wilchingen" href="wilchingen" coords="277,352,261,370,234,345,214,344,198,371,198,332,190,327,172,336,148,332,126,317,124,296,74,267,117,256,140,258,169,276,197,266,241,284,280,307,336,302,350,308,386,356" />';
}
?>

<?php
function guntmadingen (){
  echo '<area shape="poly" alt="Guntmadingen" href="guntmadingen" coords="473,290,442,300,419,287,430,276,419,268,414,247,441,245,458,245,470,238,484,246,490,294" />';
}
?>

<?php
function siblingen (){
  echo '<area shape="poly" alt="Siblingen" href="siblingen" coords="295,155,362,140,374,131,396,125,425,142,395,185,379,210,336,211,310,186" />';
}
?>

<?php
function beringen (){
  echo '<area shape="poly" alt="Beringen" href="beringen" coords="499,290,500,259,492,242,476,228,482,212,469,185,442,174,419,165,440,146,467,158,519,157,584,240,520,252,516,281" />';
}
?>

<?php
function beggingen (){
  echo '<area shape="poly" alt="Beggingen" href="index.php/liegenschaften/beggingen" coords="472,24,438,13,361,29,344,54,323,60,332,70,364,78,379,88,397,90,432,96,483,89" />';
}
?>

<?php
function loehningen (){
  echo '<area shape="poly" alt="Löhningen" href="löhningen" coords="466,229,457,242,404,242,376,241,362,216,386,215,414,169,463,193,472,210" />';
}
?>

<?php
function neunkirch (){
  echo '<area shape="poly" alt="Neunkirch" href="neunkirch" coords="249,240,201,260,246,280,283,298,328,297,372,306,396,317,422,300,396,248,370,247,352,216,307,226" />';
}
?>

<?php
function schleitheim (){
  echo '<area shape="poly" alt="Schleitheim" href="schleitheim" coords="316,38,282,49,252,44,202,85,173,114,166,140,243,144,304,114,352,124,424,116,424,100,392,98,357,86,311,73,310,58,319,48,338,45" />';
}
?>

<?php
function gaechlingen (){
  echo '<area shape="poly" alt="Gächlingen" href="gächlingen" coords="239,160,280,137,310,124,359,135,322,141,287,152,305,189,331,214,266,228,251,216,256,176" />';
}
?>

<?php
function oberhallau (){
  echo '<area shape="poly" alt="Oberhallau" href="oberhallau" coords="166,151,232,148,233,163,246,178,244,216,258,229,231,235,197,206" />';
}
?>

<?php
function buchberg (){
  echo '<area shape="poly" alt="Buchberg" href="buchberg" coords="402,506,433,514,431,523,482,536,478,554,460,588,448,591,439,582,437,570,416,548,424,539,399,534,410,525,391,520,392,506" />';
}
?>
