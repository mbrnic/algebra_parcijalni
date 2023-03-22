<?php


include './Model/db_config.php';



function dbOpenConnection()
{
	
	dbConfig();
	$GLOBALS['conn'] = new mysqli($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['db']) or die("Connect failed: %s\n". $GLOBALS['conn'] -> error);
 
}



function dbCloseConnection()
{

	if (!empty($GLOBALS['conn'])) $GLOBALS['conn'] -> close();

}



?>