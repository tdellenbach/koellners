<?php
//Error Reporting ein-/ausschalten
error_reporting(E_ALL);

// unsere Klassen einbinden
include('classes/controller.php');
include('classes/model.php');
include('classes/modelMap.php');
include('classes/modelList.php');
include('classes/view.php');
include('classes/head.php');
include('classes/navigation.php');
include('classes/foot.php');
include('classes/kontakt.php');

// $_GET und $_POST zusammenfasen
$request = array_merge($_GET, $_POST);
// Controller erstellen
$controller = new Controller($request);
// Inhalt der Webanwendung ausgeben.
echo $controller->display();
?>
