<?php 

$user = "root"; 
$password = ""; 
$host = "host"; 
$database = "test"; 


$connection= mysql_connect($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($database, $connection);


$select = mysql_query("select from * tariff_provider_tariff_match");

if($select !== FALSE)
{
   echo("The column has been added.");
}else{
   echo("The column has not been added.");
}

?>