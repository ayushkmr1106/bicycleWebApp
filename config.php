<?php
// DB credentials.
define('DB_HOST','mysqlserveruser54.mysql.database.azure.com');
define('DB_USER','User54@mysqlserveruser54');
define('DB_PASS','Admin123');
define('DB_NAME','cyclerental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>