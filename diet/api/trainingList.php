<?php
/**
 * Returns the list of policies.
 */
require 'database.php';

$trainingList = [];
$sql = "SELECT * FROM training";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $trainingList[$i]['id']    = $row['id'];
    $trainingList[$i]['name'] = $row['name'];
    $trainingList[$i]['date'] = $row['date'];
    $trainingList[$i]['duration'] = $row['duration'];
    $trainingList[$i]['intake'] = $row['intake'];
    $trainingList[$i]['incharge'] = $row['incharge'];
    $trainingList[$i]['status'] = $row['status'];
    $i++;
  }

  echo json_encode($trainingList);
}
else
{
  http_response_code(404);
}