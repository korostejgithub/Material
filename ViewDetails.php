<?php 


    $mysql = NEW MYSQLi('localhost','_materialsvc@localhost','KEline123%','material');
    $con=mysqli_connect("localhost","_materialsvc@localhost","KEline123%","material"); 
    if(!$con) { die(" Connection Error "); } 
    $ID = $_GET['GetID'];
    $query = " select * from information where ID='".$ID."'";
    $result = mysqli_query($con,$query);

    $resultSet7 = $mysql->query("SELECT Type FROM status");

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['ID'];
        $name = $row['name'];
        $Inditas_datuma = $row['Inditas_datuma'];
        $Termek_megnevezese_HU = $row['Termek_megnevezese_HU'];
        $Termek_megnevezese_EN = $row['Termek_megnevezese_EN'];
        $Region = $row['Region'];
        $Zsiros = $row['Zsiros'];
        $Egalizalt = $row['Egalizalt'];
        $Eloallito_gyar = $row['Eloallito_gyar'];
        $Termekcsoport_gyartovonal = $row['Termekcsoport_gyartovonal'];
        $Db_termek_karton = $row['Db_termek_karton'];
        $Db_termek_raklap = $row['Db_termek_raklap'];
        $TH1 = $row['TH1'];
        $TH2 = $row['TH2'];
        $TH3 = $row['TH3'];
        $TH4 = $row['TH4'];
        $TH5 = $row['TH5'];
        $TH6 = $row['TH6'];
        $TH7 = $row['TH7'];
        $TH8 = $row['TH8'];
        $TH9 = $row['TH9'];
        $Status = $row['Status'];
        $status1 = $row['status1'];
        $status2 = $row['status2'];
        $status3 = $row['status3'];
        $status4 = $row['status4'];
        $status5 = $row['status5'];
        $status6 = $row['status6'];
        $status7 = $row['status7'];
        $status8 = $row['status8'];
        $status9 = $row['status9'];
        $status1Done = $row['status1Done'];
        $status2Done = $row['status2Done'];
        $status3Done = $row['status3Done'];
        $status4Done = $row['status4Done'];
        $status5Done = $row['status5Done'];
        $status6Done = $row['status6Done'];
        $status7Done = $row['status7Done'];
        $status8Done = $row['status8Done'];
        $status9Done = $row['status9Done'];
    }

if ($status1Done!==NULL) {
$Hours1 = " hours ";
$Minutes1 = " minutes";   
$delta_time = strtotime($status1Done) -  strtotime($Inditas_datuma);
$hours1 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes1 = floor($delta_time / 60);
}
else{
    $Hours1 = "";
    $Minutes1 = ""; 
    $hours1 = "-" ;
    $minutes1 = "-";
}


if ($status2Done!==NULL) {
$Hours2 = " hours ";
$Minutes2 = " minutes";
$delta_time = strtotime($status2Done) -  strtotime($status1Done);
$hours2 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes2 = floor($delta_time / 60);
}

else {
    $Hours2 = "";
    $Minutes2 = ""; 
    $hours2 = "-" ;
    $minutes2 = "-" ;
}


if ($status3Done!==NULL) {
$Hours3 = " hours ";
$Minutes3 = " minutes"; 
$delta_time = strtotime($status3Done) -  strtotime($status2Done);
$hours3 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes3 = floor($delta_time / 60);
}
else {

    $Hours3 = "";
    $Minutes3 = ""; 
    $hours3 = "-" ;
    $minutes3 = "-";
}


if ($status4Done!==NULL) {
$Hours4 = " hours ";
$Minutes4 = " minutes"; 
$delta_time = strtotime($status4Done) -  strtotime($status3Done);
$hours4 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes4 = floor($delta_time / 60);
}

else {

    $Hours4 = "";
    $Minutes4 = ""; 
    $hours4 = "-" ;
    $minutes4 = "-" ;
}

if ($status5Done!==NULL) {
$Hours5 = " hours ";
$Minutes5 = " minutes"; 
$delta_time = strtotime($status5Done) -  strtotime($status4Done);
$hours5 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes5 = floor($delta_time / 60);
}

else {

    $Hours5 = "";
    $Minutes5 = ""; 
    $hours5 = "-" ;
    $minutes5 = "-" ;
}

if ($status6Done!==NULL) {
$Hours6 = " hours ";
$Minutes6 = " minutes"; 
$delta_time = strtotime($status6Done) -  strtotime($status5Done);
$hours6 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes6 = floor($delta_time / 60);
}

else {

    $Hours6 = "";
    $Minutes6 = ""; 
    $hours6 = "-" ;
    $minutes6 = "-" ;
}

if ($status7Done!==NULL) {
$Hours7 = " hours ";
$Minutes7 = " minutes"; 
$delta_time = strtotime($status7Done) -  strtotime($status6Done);
$hours7 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes7 = floor($delta_time / 60);
}

else {

    $Hours7 = "";
    $Minutes7 = ""; 
    $hours7 = "-" ;
    $minutes7 = "-" ;
}



if ($status8Done!==NULL) {
$Hours8 = " hours ";
$Minutes8 = " minutes"; 
$delta_time = strtotime($status8Done) -  strtotime($status7Done);
$hours8 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes8 = floor($delta_time / 60);
}

else {

    $Hours8 = "";
    $Minutes8 = ""; 
    $hours8 = "-" ;
    $minutes8 = "-" ;
}

if ($status9Done!==NULL) {
$Hours9 = " hours ";
$Minutes9 = " minutes"; 
$delta_time = strtotime($status9Done) -  strtotime($status8Done);
$hours9 = floor($delta_time / 3600);
$delta_time %= 3600;
$minutes9 = floor($delta_time / 60);
}

else {

    $Hours9 = "";
    $Minutes9 = ""; 
    $hours9 = "-" ;
    $minutes9 = "-" ;
}


?>


<style>
table, th, td {
  border-collapse: collapse;
}


}


table.center {
  margin-left:auto; 
  margin-right:auto;
  margin-bottom:2%;
  margin-top:10%;
}

button.center {
  margin-left:auto; 
  margin-right:auto;
  margin-bottom:10%;
  margin-top:10%;}

  #button1{
    width: 300px;
    height: 40px;
}
#button2{
    width: 300px;
    height: 40px;
}
#container{
    text-align: center;
}

.select-css {
    display: block;
    font-size: 15px;
    font-family: sans-serif;
    font-weight: 700;
    color: black;
    line-height: 1.2;
    padding: .6em 1.4em .5em .8em;
    width: auto;
    height: auto;
    min-width: 30%;
    max-width: 100%; /* useful when width is set to anything other than 100% */
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    /* note: bg image below uses 2 urls. The first is an svg data uri for the arrow icon, and the second is the gradient. 
        for the icon, if you want to change the color, be sure to use `%23` instead of `#`, since it's a url. You can also swap in a different svg icon or an external image reference
        
    */
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    /* arrow icon position (1em from the right, 50% vertical) , then gradient position*/
    background-position: right .7em top 50%, 0 0;
    /* icon size, then gradient */
    background-size: .65em auto, 100%;
}
/* Hide arrow icon in IE browsers */
.select-css::-ms-expand {
    display: none;
}
/* Hover style */
.select-css:hover {
    border-color: #888;
}
/* Focus style */
.select-css:focus {
    border-color: #aaa;
    /* It'd be nice to use -webkit-focus-ring-color here but it doesn't work on box-shadow */
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222; 
    outline: none;
}

/* Set options to normal weight */
.select-css option {
    font-weight:normal;
}

/* Support for rtl text, explicit support for Arabic and Hebrew */
*[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
    background-position: left .7em top 50%, 0 0;
    padding: .6em .8em .5em 1.4em;
}

/* Disabled styles */
.select-css:disabled, .select-css[aria-disabled=true] {
    color: graytext;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22graytext%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
      linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
}

.select-css:disabled:hover, .select-css[aria-disabled=true] {
    border-color: #aaa;
}


body {
  margin: 2rem;
}

.styled-table {
    border-collapse: collapse;
    margin: 15px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 2px 2px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 1px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.collapsible {
  background-color: #DCDCDC;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: 1px solid grey;

  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: darkgrey;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <a href="ViewData.php" class="button" title="Back To Homepage">
    <img src="korostejj.png" width="200" height="50" style="margin-top: 0%">
    </a>
</head>
<body style="background-color: #62FF9C">

        
                            

                            <form action="UpdateStatus.php?ID=<?php echo $ID ?>" method="post" >
                        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


<div class="container" style="">
      <br />
      <div class="card" style="width:1000px; height:auto; margin-top: -25px ; margin-left: 0px" >
        <div class="card-body" style=" height:auto; min-height: 600px">

                                <table  class="styled-table" style="width: 100%; height: 20%; border: 2px solid grey;">
                                <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> Indito neve </td>
                                    <td><select name="name" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $name ?>"> <?php echo $name ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> Inditas_datuma </td>
                                    <td><textarea style="overflow:hidden" disabled="" style="background-color:lightgrey;" ><?php echo$Inditas_datuma ?></textarea>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> Termek megnevezese (HUN) </td>
                                    <td><textarea rows="3" cols="50" style="overflow:auto" disabled="" ><?php echo$Termek_megnevezese_HU?></textarea>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> Termek megnevezese (ENG) </td>
                                    <td><textarea rows="3" cols="50" style="overflow:auto" disabled="" ><?php echo$Termek_megnevezese_EN?></textarea>
                                    </tr>

                                    <td style=" font-weight: bold;" style="border: 2px solid grey;"> Region </td>
                                    <td style=" font-weight: bold;"><select  class="select-css" Region="Region" disabled >
                                    <option value=""> <?php echo $Region ?>  </option>
                                    </td>
                                    </tr>

                                    <td style=" font-weight: bold;" style="border: 2px solid grey;"> Fat type </td>
                                    <td style=" font-weight: bold;"><select class="select-css" Zsiros="Zsiros" disabled >
                                    <option value=""><?php echo $Zsiros ?></option>
                                    </td>
                                    </tr>

                                    <td style=" font-weight: bold;" style="border: 2px solid grey;"> Egalizalt?? </td>
                                    <td><select class="select-css" Egalizalt="Egalizalt" disabled >
                                    <option value=""><?php echo $Egalizalt ?>  </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> Eloallito gyar </td>
                                    <td><textarea  style="overflow:auto" disabled="" ><?php echo$Eloallito_gyar?></textarea>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;" >  Termekcsoport (gyartovonal) </td>
                                    <td><textarea  style="overflow:auto" disabled="" ><?php echo$Termekcsoport_gyartovonal?></textarea>
                                    </tr>


                                     <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;">  Db termek/karton </td>
                                    <td><textarea  style="overflow:auto" disabled="" ><?php echo$Db_termek_karton?></textarea>
                                    </tr>

                                     <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;">  Db termek/raklap </td>
                                    <td><textarea  style="overflow:auto" disabled="" ><?php echo$Db_termek_raklap?></textarea>
                                    </tr>


                                    <td style=" font-weight: bold;"> Current Status </td>
                                    <td><textarea rows="2" cols="50" <?php 'value="'.$Status.'" ' ?> disabled="" > Current State: <?php echo $Status ?></textarea>
                                      


  
                                    
                                    </td>

                                    </table>

                                    <button type="button" class="collapsible" style="color:black; font-size:20px; text-align: center;"> <span>&#8645;</span> Hierarchia-adatok</button>
                                    <div class="content">
                                    <table width=100%>
                                        
                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH1 </td>
                                    <td style="margin-left: 50%"><select name="TH1" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH1 ?>"> <?php echo $TH1 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH2 </td>
                                    <td><select name="TH2" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH2 ?>"> <?php echo $TH2 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH3 </td>
                                    <td><select name="TH3" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH3 ?>"> <?php echo $TH3 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH4 </td>
                                    <td><select name="TH4" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH4 ?>"> <?php echo $TH4 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH5 </td>
                                    <td><select name="TH5" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH5 ?>"> <?php echo $TH5 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH6 </td>
                                    <td><select name="TH3" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH6 ?>"> <?php echo $TH6 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH7 </td>
                                    <td><select name="TH5" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH7 ?>"> <?php echo $TH7 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH8 </td>
                                    <td><select name="TH3" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH8 ?>"> <?php echo $TH8 ?> </option>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td style=" font-weight: bold;"> TH9 </td>
                                    <td><select name="TH5" class="select-css" disabled="" style="background-color:white; ">
                                    <option value=""<?php echo $TH9 ?>"> <?php echo $TH9 ?> </option>
                                    </td>
                                    </tr>

                                    </table>
                                </div>

                                    <button type="button" class="collapsible" style="color:black; font-size:20px; text-align: center;"> <span>&#8645;</span> Detailed Stages Time</button>
                                    <div class="content">
                                    <table width="100%" style="border: 2px solid grey; margin-top: 2%">
                                    
                                     <tr  style="border: 2px solid grey;">
                                        <td width="11%" style="border: 2px solid grey;"> Stage 1</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 2</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 3</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 4</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 5</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 6</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 7</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 8</td>
                                        <td width="11%" style="border: 2px solid grey;"> Stage 9</td>
                                     
                                     <tr style="border: 2px solid grey;">
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours1}{$Hours1}{$minutes1}{$Minutes1}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours2}{$Hours2}{$minutes2}{$Minutes2}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours3}{$Hours3}{$minutes3}{$Minutes3}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours4}{$Hours4}{$minutes4}{$Minutes4}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours5}{$Hours5}{$minutes5}{$Minutes5}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours6}{$Hours6}{$minutes6}{$Minutes6}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours7}{$Hours7}{$minutes7}{$Minutes7}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours8}{$Hours8}{$minutes8}{$Minutes8}"; ?></td>
                                    <td  style="border: 2px solid grey; text-align: center;"><?php echo "{$hours9}{$Hours9}{$minutes9}{$Minutes9}"; ?></td>
                                    
                                    </tr>
                                    </table>



                                    



                                    </table>            
                                    </div>

                            
                         

                       

  
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
  


        <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>