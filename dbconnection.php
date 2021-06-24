<?php
    //$db = mysqli_connect("localhost","root","","epiz_28930223_synergy");// LOCAL XAMPP
    $db = mysqli_connect("remotemysql.com","5EeGy5MwAa","P1iZ0NZTV3","5EeGy5MwAa");  
//$db = mysqli_connect("sql211.epizy.com","epiz_28930223","xZLTZXtxfC","epiz_28930223_synergy");
//$db = mysqli_connect("localhost","id17096387_synergysoft","z6i%&VOD$D3#+j#n","id17096387_synergysoftdb1");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>