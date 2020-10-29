
<?php


    $mysql = NEW MYSQLi('localhost','_materialsvc@localhost','KEline123%','material');
    $con=mysqli_connect("localhost","_materialsvc@localhost","KEline123%","material"); 
    if(!$con) { die(" Connection Error "); } 
    $ID = $_GET['GetID'];
    $query = " select * from recuired where ID='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['ID'];
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
        $TH9 = $row['TH9'];  } 


$resultSet1 = $mysql->query("SELECT Name FROM users");

$resultSet2 = $mysql->query("SELECT Type FROM zsiros");

$resultSet3 = $mysql->query("SELECT Type FROM region");

$resultSet4 = $mysql->query("SELECT Type FROM egalizalt");

$resultSet5 = $mysql->query("SELECT Type FROM eloallito_gyar");

$resultSet6 = $mysql->query("SELECT Type FROM termekcsoport");

$resultSet7 = $mysql->query("SELECT Type FROM status where ID=0");

$resultSet8 = $mysql->query("SELECT Type FROM th1");

$resultSet9 = $mysql->query("SELECT Type FROM th2");

$resultSet10 = $mysql->query("SELECT Type FROM th3");

$resultSet11 = $mysql->query("SELECT Type FROM th4");

$resultSet12 = $mysql->query("SELECT Type FROM th5");

$resultSet13 = $mysql->query("SELECT Type FROM th6");

$resultSet14 = $mysql->query("SELECT Type FROM th7");

$resultSet15 = $mysql->query("SELECT Type FROM th8");

$resultSet16 = $mysql->query("SELECT Type FROM th9");

$query1 = " select ID from information ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($mysql,$query1);
 
?>

<!DOCTYPE HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border: 1px solid grey;
  border-collapse: collapse;
}
table.center {
  margin-left:auto;
  margin-right:auto;
  margin-bottom:10%;
  margin-top:10%;
}

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
  padding: 18px;
  width: 100%;
  border: none;
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


/* Header/logo Title */
.header {
  padding: 5px;
  text-align: center;
  background: #62FF9C;;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 30px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}


</table>
</style>

<div class="header">
  <div style="text-align: left; border: 0px solid">
    <img src="korostejj.png" width="200" height="50" style="margin-top: 0%;" ></div>
</div>


<body style="background-color:#62FF9C;">


<body>
    
<form name = "form1" action="NewDataAdderTemplate.php" method = "POST" enctype = "multipart/form-data">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


<div class="container" style="">
      <br />
      <div class="card" style="width:200px; height:40px; margin-top: 0px ; margin-left: 400px; margin-top: -50px; background-color: lightgrey" >
        <div class="card-body" style=" height:30px; margin-top: -12px;">

  Your Tracking ID:  
  
               <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['ID'];
                                       
                                   
                            ?>
                                    <tr>
                                      
                                        <?php echo $ID+1 ?>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>  

</div>
</div>
</div>

  
</div>


<div class="container" style="">
      <br />
      <div class="card" style="width:1000px; height:auto; margin-top: -25px ; margin-left: 0px" >
        <div class="card-body" style=" height:auto; min-height: 600px">

<table class="styled-table" style=" margin-bottom:0%; margin-top:0%;width: 100%; height: 50%; border-radius=0;">


<tr>
<td style=" font-weight: bold;">  Indito neve </td>
<td>
  <select class="select-css" name="name" required style="background-color:#EAEAEA;">
  <option value=""> Please Select </option>
<?php


while($rows = $resultSet1->fetch_assoc())
{

    $Name = $rows['Name'];
  echo '<option value="'.$Name.'"> '.$Name.'</option>';
}


            
?>
        </select>
</td>
</tr>



<tr>
<td style=" font-weight: bold;" > Termek megnevezese (HUN) </td>
<td><textarea name="Termek_megnevezese_HU" required rows="3" cols="50" maxlength="40" style="background-color:white;"  ><?php echo$Termek_megnevezese_HU?></textarea>
</tr>
<tr>
<td style=" font-weight: bold;" > Termek megnevezese (ENG) </td>
 <td><textarea name="Termek_megnevezese_EN" required rows="3" cols="50" maxlength="40" style="background-color:white"  ><?php echo$Termek_megnevezese_EN?></textarea>
</tr>


<tr>
<td style=" font-weight: bold;"> Region </td>
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

<tr>
<td style=" font-weight: bold;"> Fat type </td>
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

<tr>
<td style=" font-weight: bold;"> Egalizalt? </td>
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

<tr>
<td style=" font-weight: bold;"> Eloallito gyar </td>
<td><select class="select-css" name="Eloallito_gyar" required style="background-color:white;">
                                    <option <?php 'value="'.$Eloallito_gyar.'" ' ?> selected="true" ><?php echo $Eloallito_gyar ?>  </option>
                                    <?php
                                    while($rows = $resultSet5->fetch_assoc())
                                    {

                                     $Type = $rows['Type'];
                                      echo '<option value="'.$Type.'"> '.$Type.'</option>';
                                    }
                                    ?>
</select>
</td>
</tr>

<tr>
<td style=" font-weight: bold;"> Termekcsoport (gyartovonal) </td>
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



<tr>
<td style=" font-weight: bold;"> Db termek/karton </td>
<td><textarea name="Db_termek_karton" required style="overflow:auto"  ><?php echo$Db_termek_karton?></textarea>
</tr>

<tr>
<td style=" font-weight: bold;"> Db termek/raklap </td>
<td><textarea name="Db_termek_raklap" required style="overflow:auto"  ><?php echo$Db_termek_raklap?></textarea>
</tr>

<tr>
<td style=" font-weight: bold;"> Status </td>
<td><select class="select-css" name="Status" required style="background-color:#EAEAEA;">
  
<?php
while($rows = $resultSet7->fetch_assoc())
{

  $Type = $rows['Type'];
  echo '<option value="'.$Type.'"> '.$Type.'</option>';

}


            
?>
</select>
</td>
</tr>


</table>
<td colspan="3"> </td>
<button type="button" class="collapsible" style="color:black; font-size:20px; text-align: center;"> <span>&#8645;</span> Hierarchia-adatok</button>
<div class="content"> 
<table class="styled-table">



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
</tr>
</div>
</table>
</div>
</div>




<div id="container" style="margin-top: -20px; margin-bottom: 5px">
<button type="submit" id="button1" class="myButton" value="Submit">Submit</button>
<button type="cancel" id="button2" class="myButton" onclick="javascript:window.location='index.html';">Cancel</button></div>
</tr>
</div>

</form>

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

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

 $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"Template.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });
</script>
</body>
</html>