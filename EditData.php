<?php 

    $con=mysqli_connect("localhost","_materialsvc@localhost","KEline123%","material"); 
    if(!$con) { die(" Connection Error "); } 

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $Zsiros = mysqli_real_escape_string($con, $_REQUEST['Zsiros']);
        $Region = mysqli_real_escape_string($con, $_REQUEST['Region']);
        $Egalizalt = mysqli_real_escape_string($con, $_REQUEST['Egalizalt']);
        $Termek_megnevezese_EN = mysqli_real_escape_string($con, $_REQUEST['Termek_megnevezese_EN']);
        $Termek_megnevezese_HU = mysqli_real_escape_string($con, $_REQUEST['Termek_megnevezese_HU']);
        $Eloallito_gyar = mysqli_real_escape_string($con, $_REQUEST['Eloallito_gyar']);
        $Termekcsoport_gyartovonal = mysqli_real_escape_string($con, $_REQUEST['Termekcsoport_gyartovonal']);
        $Db_termek_karton = mysqli_real_escape_string($con, $_REQUEST['Db_termek_karton']);
        $Db_termek_raklap = mysqli_real_escape_string($con, $_REQUEST['Db_termek_raklap']);
        $Status = mysqli_real_escape_string($con, $_REQUEST['Status']);

$TH1 = mysqli_real_escape_string($con, $_REQUEST['TH1']);

$TH2 = mysqli_real_escape_string($con, $_REQUEST['TH2']);

$TH3 = mysqli_real_escape_string($con, $_REQUEST['TH3']);

$TH4 = mysqli_real_escape_string($con, $_REQUEST['TH4']);

$TH5 = mysqli_real_escape_string($con, $_REQUEST['TH5']);

$TH6 = mysqli_real_escape_string($con, $_REQUEST['TH6']);

$TH7 = mysqli_real_escape_string($con, $_REQUEST['TH7']);

$TH8 = mysqli_real_escape_string($con, $_REQUEST['TH8']);

$TH9 = mysqli_real_escape_string($con, $_REQUEST['TH9']);





        $sql = " UPDATE information set 

        Zsiros='".$Zsiros."',
        Region='".$Region."',
        Termek_megnevezese_EN='".$Termek_megnevezese_EN."',
        Termek_megnevezese_HU='".$Termek_megnevezese_HU."',
        Egalizalt='".$Egalizalt."',
        Eloallito_gyar='".$Eloallito_gyar."',
        Termekcsoport_gyartovonal='".$Termekcsoport_gyartovonal."',
        Db_termek_raklap='".$Db_termek_raklap."',
        Db_termek_karton='".$Db_termek_karton."',
        Status='".$Status."',
        TH1='".$TH1."',
        TH2='".$TH2."',
        TH3='".$TH3."',
        TH4='".$TH4."',
        TH5='".$TH5."',
        TH6='".$TH6."',
        TH7='".$TH7."',
        TH8='".$TH8."',
        TH9='".$TH9."'

        where ID='".$ID."'";
        $result = mysqli_query($con,$sql);

        if($result)
        {
            header("location:ViewData.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:ViewData.php");
    }

mysqli_close($con);
?>