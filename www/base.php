<?php
require "WEB-INF/lib/adodb/adodb.inc.php";
$driver="mysqli";
$db= adoNewConnection ($driver);
$parameters = "root:mypass01@mysql/site01";

$db-> connect( $parameters);
if($_REQUEST['debug']){
 $db->debug = true;
}

?>
