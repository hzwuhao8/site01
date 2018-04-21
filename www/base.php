<?php
require "WEB-INF/lib/adodb/adodb.inc.php";
$driver="mysqli";
$db= adoNewConnection ($driver);
$parameters = "root:mypass01@mysqlserver01/site01";

$db-> connect( "mysqlserver01", "root", "mypass01","site01" );
if($_REQUEST['debug']){
 $db->debug = true;
}

?>
