<?php 


    $mysql = NEW MYSQLi('localhost','_materialsvc@localhost','KEline123%','material');
    $con=mysqli_connect("localhost","_materialsvc@localhost","KEline123%","material"); 
    if(!$con) { die(" Connection Error "); } 
    $ID = $_GET['GetID'];
    $query = " select * from information where ID='".$ID."'";
    $result = mysqli_query($con,$query);

$resultSet1 = $mysql->query("SELECT Name FROM users");

$resultSet2 = $mysql->query("SELECT Type FROM zsiros");

$resultSet3 = $mysql->query("SELECT Type FROM region");

$resultSet4 = $mysql->query("SELECT Type FROM egalizalt");

$resultSet5 = $mysql->query("SELECT Type FROM eloallito_gyar");

$resultSet6 = $mysql->query("SELECT Type FROM termekcsoport");

$resultSet7 = $mysql->query("SELECT Type FROM status");

$resultSet8 = $mysql->query("SELECT Type FROM th1");

$resultSet9 = $mysql->query("SELECT Type FROM th2");

$resultSet10 = $mysql->query("SELECT Type FROM th3");

$resultSet11 = $mysql->query("SELECT Type FROM th4");

$resultSet12 = $mysql->query("SELECT Type FROM th5");

$resultSet13 = $mysql->query("SELECT Type FROM th6");

$resultSet14 = $mysql->query("SELECT Type FROM th7");

$resultSet15 = $mysql->query("SELECT Type FROM th8");

$resultSet16 = $mysql->query("SELECT Type FROM th9");


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
        $Status = $row['Status'];
        $TH1 = $row['TH1'];
        $TH2 = $row['TH2'];
        $TH3 = $row['TH3'];
        $TH4 = $row['TH4'];
        $TH5 = $row['TH5'];
        $TH6 = $row['TH6'];
        $TH7 = $row['TH7'];
        $TH8 = $row['TH8'];
        $TH9 = $row['TH9'];

    }

?>


<style>
table, th, td { 
  font-weight: bold;
  border-collapse: collapse;
}
table.center {
  margin-left:auto; 
  margin-right:auto;
  margin-bottom:10%;
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
    color: #444;
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
    margin: 25px 0;
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

.myButton {
  -moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
    -webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
    box-shadow:inset 0px 1px 3px 0px #91b8b3;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
    background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
    background-color:#768d87;
    -webkit-border-radius:5px;
    -moz-border-radius:5px;
    border-radius:5px;
    border:1px solid #566963;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:11px 23px;
    text-decoration:none;
    text-shadow:0px -1px 0px #2b665e;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
    background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
    background-color:#6c7c7c;
}
.myButton:active {
  position:relative;
    top:1px;
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
<body style="background-color:#62FF9C;">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    

                            <form action="EditData.php?ID=<?php echo $ID ?>" method="post">
                              <div class="container" style="">
      <br/>
      <div class="card" style="width:1000px; height:auto; margin-top: -25px ; margin-left: 0px" >
        <div class="card-body" style=" height:auto; min-height: 600px" >
                                <table class="styled-table" style="width: 100%; height: 20%; margin-top: 0%;">
                                <tr style="border: 2px solid grey;">
                                    <td> Indito neve </td>
                                    <td><select class="select-css" name="name"  style="background-color:white;">
                                     <option <?php 'value="'.$name.'" ' ?>  selected="true"><?php echo $name ?>  </option>
                                     <?php
                                    while($rows = $resultSet1->fetch_assoc())
                                    {

                                       $name = $rows['Name'];
                                       echo '<option value="'.$name.'"> '.$name.'</option>';

                                    }
                                    ?>

                                    <tr style="border: 2px solid grey;">
                                    <td> Inditas_datuma </td>
                                    <td><textarea style="overflow:hidden" value="" disabled="" style="background-color:white;" ><?php echo$Inditas_datuma ?></textarea>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td> Termek megnevezese (HUN) </td>
                                    <td><textarea name="Termek_megnevezese_HU" required rows="3" cols="50" maxlength="40" style="background-color:white;"  ><?php echo$Termek_megnevezese_HU?></textarea>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td> Termek megnevezese (ENG) </td>
                                    <td><textarea name="Termek_megnevezese_EN" required rows="3" cols="50" maxlength="40" style="background-color:white"  ><?php echo$Termek_megnevezese_EN?></textarea>
                                    </tr>

                                    
                                    <td style="border: 2px solid grey;"> Region </td>
                                    <td style="border: 2px solid grey;"><select class="select-css" name="Region" required style="background-color:white;" >
                                     <option <?php 'value="'.$Region.'" ' ?>  selected="true"><?php echo $Region ?>  </option>
                                     <?php
                                    while($rows = $resultSet3->fetch_assoc())
                                    {

                                       $Type = $rows['Type'];
                                       echo '<option value="'.$Type.'"> '.$Type.'</option>';

                                    }


            
                                    ?>
                                </select>
                                </td>
                                </tr>


                                    <td style="border: 2px solid grey;"> Fat type </td>
                                    <td style="border: 2px solid grey;">
                                        <select class="select-css" name="Zsiros" required style="background-color:white;" >
                                     <option <?php 'value="'.$Zsiros.'" ' ?> selected="true" > <?php echo $Zsiros ?>  </option>
                                    <?php
                                    while($rows = $resultSet2->fetch_assoc())
                                    {

                                       $Type = $rows['Type'];
                                       echo '<option value="'.$Type.'"> '.$Type.'</option>';

                                    }


            
                                    ?>
                                    </select>
                                    </td>
                                    </tr>

                                    <td style="border: 2px solid grey;"> Egalizalt?? </td>
                                    <td style="border: 2px solid grey;"><select class="select-css" name="Egalizalt" required style="background-color:white;" >
                                    <option <?php 'value="'.$Egalizalt.'" ' ?> selected="true" ><?php echo $Egalizalt ?>  </option>
                                    <?php
                                    while($rows = $resultSet4->fetch_assoc())
                                    {

                                       $Type = $rows['Type'];
                                       echo '<option value="'.$Type.'"> '.$Type.'</option>';

                                    }
                                    ?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr style="border: 2px solid grey;">
                                    <td> Eloallito gyar </td>
                                    <td><select class="select-css" name="Eloallito_gyar" required style="background-color:white;">
                                    <option <?php 'value="'.$Eloallito_gyar.'" ' ?> selected="true" ><?php echo $Eloallito_gyar ?>  </option>
                                    <?php
                                    while($rows = $resultSet5->fetch_assoc())
                                    {

                                     $Type = $rows['Type'];
                                      echo '<option value="'.$Type.'"> '.$Type.'</option>';
                                    }
                                    ?>


                                    <tr style="border: 2px solid grey;">
                                     <td> Termekcsoport (gyartovonal) </td>
                                    <td><select class="select-css" name="Termekcsoport_gyartovonal" required style="background-color:white;">
                                     <option <?php 'value="'.$Termekcsoport_gyartovonal.'" ' ?> selected="true" ><?php echo $Termekcsoport_gyartovonal ?>  </option>
                                    <?php
                                    while($rows = $resultSet6->fetch_assoc())
                                    {

                                            $Type = $rows['Type'];
                                            echo '<option value="'.$Type.'"> '.$Type.'</option>';


                                            }

                                           ?>
                                           </select>
                                           </td>
                                           </tr>


                                     <tr style="border: 2px solid grey;">
                                    <td>  Db termek/karton </td>
                                    <td><textarea name="Db_termek_karton" required style="overflow:auto"  ><?php echo$Db_termek_karton?></textarea>
                                    </tr>

                                     <tr style="border: 2px solid grey;">
                                    <td>  Db termek/raklap </td>
                                    <td><textarea name="Db_termek_raklap" required style="overflow:auto"  ><?php echo$Db_termek_raklap?></textarea>
                                    </tr>


                                    


                                       <tr style="border: 2px solid grey;"> 


                                    <td > Current Status </td>
                                    <td><textarea rows="4" cols="50" <?php 'value="'.$Status.'" ' ?> disabled="" > Current State: <?php echo $Status ?></textarea>

                                        <tr style="border: 2px solid grey;">

                                    
                    



                                    <td > Status </td>
                                    <td><select class="select-css" name="Status" >
                                    
                                    <?php
                                    while($rows = $resultSet7->fetch_assoc())
                                    {

                                       $Type = $rows['Type'];
                                       echo '<option value="'.$Type.'"> '.$Type.'</option>';

                                    }


            
                                    ?>
                                    </select>
                                    </table>

                                    
                                            <button type="button" class="collapsible" style="color:black; font-size:20px; text-align: center;"> <span>&#8645;</span> Hierarchia-adatok</button>
                                    <div class="content"> 
                                        <table class="styled-table" style="width: 100%; height: 100%; border: 2px solid grey;">

                                        	<tr>
<td> TH1 </td>
<td><select class="select-css" name="TH1" style="background-color:lightgrey;">
<option <?php 'value="'.$TH1.'" ' ?>  selected="true"><?php echo $TH1 ?>  </option>
<?php
while($rows = $resultSet8->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH2 </td>
<td><select class="select-css" name="TH2" style="background-color:lightgrey;">
<option <?php 'value="'.$TH2.'" ' ?>  selected="true"><?php echo $TH2 ?>  </option>
<?php
while($rows = $resultSet9->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH3 </td>
<td><select class="select-css" name="TH3" style="background-color:lightgrey;">
<option <?php 'value="'.$TH3.'" ' ?>  selected="true"><?php echo $TH3 ?>  </option>
<?php
while($rows = $resultSet10->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH4 </td>
<td><select class="select-css" name="TH4" style="background-color:lightgrey;">
<option <?php 'value="'.$TH4.'" ' ?>  selected="true"><?php echo $TH4 ?>  </option>
<?php
while($rows = $resultSet11->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH5 </td>
<td><select class="select-css" name="TH5" style="background-color:lightgrey;">
<option <?php 'value="'.$TH5.'" ' ?>  selected="true"><?php echo $TH5 ?>  </option>
<?php
while($rows = $resultSet12->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH6 </td>
<td><select class="select-css" name="TH6" style="background-color:lightgrey;">
<option <?php 'value="'.$TH6.'" ' ?>  selected="true"><?php echo $TH6 ?>  </option>
<?php
while($rows = $resultSet13->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>


<tr>
<td> TH7 </td>
<td><select class="select-css" name="TH7" style="background-color:lightgrey;">
<option <?php 'value="'.$TH7.'" ' ?>  selected="true"><?php echo $TH7 ?>  </option>
<?php
while($rows = $resultSet14->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>


<tr>
<td> TH8 </td>
<td><select class="select-css" name="TH8" style="background-color:lightgrey;">
<option <?php 'value="'.$TH8.'" ' ?>  selected="true"><?php echo $TH8 ?>  </option>
<?php
while($rows = $resultSet15->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>

<tr>
<td> TH9 </td>
<td><select class="select-css" name="TH9" style="background-color:lightgrey;">
<option <?php 'value="'.$TH9.'" ' ?>  selected="true"><?php echo $TH9 ?>  </option>
<?php
while($rows = $resultSet16->fetch_assoc())
{

	$Type = $rows['Type'];
	echo '<option value="'.$Type.'"> '.$Type.'</option>';

}            
?>
</select> 
</td>
</table> 
                                       
                                    
                            </table>
                            </div> 
                            <div style="margin-top: 0%; text-align: center">
                                        <button  class="myButton" id="button1" name="update">Update</button>
                                    </div>
                            </form>
                        </div>
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