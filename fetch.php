<html>
<style> .center {
  margin-left: 400px;
  width: 50%; }
    
</style>
</html>
<?php
// Turn off all error reporting
error_reporting(0);


$connect = new PDO("mysql:host=localhost; dbname=material", "root", "MJ112233");

/*function get_total_row($connect)
{
  $query = "
  SELECT * FROM tbl_webslesson_post
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  return $statement->rowCount();
}

$total_record = get_total_row($connect);*/

$limit = '5';
$page = 1;
if($_POST['page'] > 1)
{
  $start = (($_POST['page'] - 1) * $limit);
  $page = $_POST['page'];
}
else
{
  $start = 0;
}

$query = " SELECT * FROM information ";

if($_POST['query'] != '')
{
  $query .= '
  WHERE ID LIKE "%'.str_replace(' ', '%', $_POST['query']).'%" 
  ';
}

$query .= 'ORDER BY ID DESC ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement = $connect->prepare($filter_query);
$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

$output = '
<table  class="table table-striped table-bordered">
  <tr>
    <th> ID </th>
                                <th> Indito neve </th>
                                <th> Inditas_datuma </th>
                                <th> Termek megnevezese (HUN) </th>
                                <th> Termek megnevezese (EN)  </th>
                                <th> Status  </th>
                                <th> Last Status Update </th>
                                <th> View </th>
                                <th> UPDATE</th>
                                <th>Change Data</th>
  </tr>
';
if($total_data > 0)
{
  foreach($result as $row)
  {

    $output .= '
    <tr>
      <td>'.$row["ID"].'</td>
      <td>'.$row["name"].'</td>
      <td>'.$row["Inditas_datuma"].'</td>
      <td>'.$row["Termek_megnevezese_HU"].'</td>
      <td>'.$row["Termek_megnevezese_EN"].'</td>
      <td>'.$row["Status"].'</td>
      <td>'.$row["LastUpdated"].'</td>
      <td><a href="ViewDetails.php?GetID= '.$row["ID"].'" >View</a></td>
      <td><a href="UpdateDataForm.php?GetID= '.$row["ID"].'" >Update</a></td>
      <td><a href="ChangeDataForm.php?GetID= '.$row["ID"].'">Change Data</a></td>
    </tr>
    '
    ;
  }
}
else
{
  $output .= '
  <tr>
    <td colspan="2" align="center">-</td>
  </tr>
  ';
}

$output .= '
</table>
<br />
<div class="center">
  <ul class="pagination">
';

$total_links = ceil($total_data/$limit);
$previous_link = '';
$next_link = '';
$page_link = '';

//echo $total_links;

if($total_links > 4)
{
  if($page < 5)
  {
    for($count = 1; $count <= 5; $count++)
    {
      $page_array[] = $count;
    }
    $page_array[] = '...';
    $page_array[] = $total_links;
  }
  else
  {
    $end_limit = $total_links - 5;
    if($page > $end_limit)
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $end_limit; $count <= $total_links; $count++)
      {
        $page_array[] = $count;
      }
    }
    else
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $page - 1; $count <= $page + 1; $count++)
      {
        $page_array[] = $count;
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    }
  }
}
else
{
  for($count = 1; $count <= $total_links; $count++)
  {
    $page_array[] = $count;
  }
}

if(!$total_data==0){
for($count = 0; $count < count($page_array); $count++)
{
  if($page == $page_array[$count])
  {
    $page_link .= '
    <li class="page-item active">
      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
    </li>
    ';

    $next_id = $page_array[$count] - 1;
    if($next_id > 0)
    {
      $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
    }
    else
    {
      $next_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Next</a>
      </li>
      ';
    }
    $previous_id = $page_array[$count] + 1;
    if($previous_id > $total_links)
    {
      $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Previous</a>
      </li>
        ';
    }
    else
    {
      $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
    }
  }
  else
  {
    if($page_array[$count] == '...')
    {
      $page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
    }
    else
    {
      $page_link .= '
      <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>
      ';
    }
  }
}
}

$output .= $next_link . $page_link . $previous_link;
$output .= '
  </ul>

</div>
';

echo " <div style=width:auto; margin:0 ; align='center'> ".$output."  </div> ";

?>