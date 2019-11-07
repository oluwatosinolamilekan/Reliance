<?php 

$user = "root"; 
$password = ""; 
$host = "host"; 
$database = "test"; 


$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($database, $connection);


// $added= mysql_query("ALTER TABLE customers ADD email VARCHAR(50) NOT NULL");

// if($added !== FALSE)
// {
//    echo("The column has been added.");
// }else{
//    echo("The column has not been added.");
// }

?>