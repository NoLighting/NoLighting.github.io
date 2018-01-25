<?php
include 'config.php';
$mysqli = new mysqli($host, $user, $db_pass, $db);
$mysqli->query ("SET NAMES 'utf8'");
$row = $mysqli->query ("SELECT * FROM `news` ORDER BY id ASC");

?>
<?php
switch($_GET["page"]){
	case "index": include 'pages/index.php';
	break;
	case "full": include 'pages/full.php';
	break;
	default: include 'pages/index.php';
}
?>
