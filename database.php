<?
//require_once "rb.php";
$database    = 'news_bd'; // название базы
$mysql_user    = 'root'; // пользователь
$mysql_password    = 'uruzumataki626'; //пароль
$mysql_host    = 'localhost'; //сервер

$success = mysql_connect ($mysql_host, $mysql_user, $mysql_password);
if (!$success)
die ("<b>Нет конекта с базой данных, проверьте правильность имени пользователя и пароля!</b>");
$success = mysql_select_db ($database);
if (!$success) {
print "<b>Нет конекта с базой данных.";
die();
}
?>