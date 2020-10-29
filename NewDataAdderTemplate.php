<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "_materialsvc@localhost", "KEline123%", "material");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$Termek_megnevezese_HU = mysqli_real_escape_string($link, $_REQUEST['Termek_megnevezese_HU']);

$Termek_megnevezese_EN = mysqli_real_escape_string($link, $_REQUEST['Termek_megnevezese_EN']);

$Region = mysqli_real_escape_string($link, $_REQUEST['Region']);

$Zsiros = mysqli_real_escape_string($link, $_REQUEST['Zsiros']);

$Egalizalt = mysqli_real_escape_string($link, $_REQUEST['Egalizalt']);

$Eloallito_gyar = mysqli_real_escape_string($link, $_REQUEST['Eloallito_gyar']);

$TH1 = mysqli_real_escape_string($link, $_REQUEST['TH1']);

$TH2 = mysqli_real_escape_string($link, $_REQUEST['TH2']);

$TH3 = mysqli_real_escape_string($link, $_REQUEST['TH3']);

$TH4 = mysqli_real_escape_string($link, $_REQUEST['TH4']);

$TH5 = mysqli_real_escape_string($link, $_REQUEST['TH5']);

$TH6 = mysqli_real_escape_string($link, $_REQUEST['TH6']);

$TH7 = mysqli_real_escape_string($link, $_REQUEST['TH7']);

$TH8 = mysqli_real_escape_string($link, $_REQUEST['TH8']);

$TH9 = mysqli_real_escape_string($link, $_REQUEST['TH9']);

$Status = mysqli_real_escape_string($link, $_REQUEST['Status']);



(int)$Termekcsoport_gyartovonal = mysqli_real_escape_string($link, $_REQUEST['Termekcsoport_gyartovonal']);

(int)$Db_termek_karton = mysqli_real_escape_string($link, $_REQUEST['Db_termek_karton']);

(int)$Db_termek_raklap = mysqli_real_escape_string($link, $_REQUEST['Db_termek_raklap']);


 
// Attempt insert query execution
$sql = "INSERT INTO information (name, Termek_megnevezese_HU, Termek_megnevezese_EN, Region, Zsiros, Egalizalt, Eloallito_gyar, Termekcsoport_gyartovonal, Db_termek_karton, Db_termek_raklap, TH1 , TH2 , TH3 , TH4 , TH5 , TH6 , TH7 , TH8 , TH9 , Status ) VALUES ('$name', '$Termek_megnevezese_HU','$Termek_megnevezese_EN' , '$Region', '$Zsiros' , '$Egalizalt', '$Eloallito_gyar' , '$Termekcsoport_gyartovonal' , '$Db_termek_karton' , '$Db_termek_raklap' , '$TH1' , '$TH2' , '$TH3' , '$TH4' , '$TH5' , '$TH6' , '$TH7' , '$TH8' , '$TH9' , '$Status')";


if(mysqli_query($link, $sql)){
echo "Records Added succesfully";
    echo "<script>setTimeout(\"location.href = 'index.html';\",1500);</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>