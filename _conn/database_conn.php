
<?php

$host = "plcmdb.database.windows.net";
$database = "PLCM_CLIENTES";
$user = "adm_plcm";
$password = "Sonda@2020";
$utf = "UTF-8";
 
$serverName = $host;
$connectionInfo = array( "Database"=>$database, "UID"=>$user, "PWD"=>$password, "CharacterSet"=>$utf);
 
$connect = sqlsrv_connect( $serverName, $connectionInfo);

?>