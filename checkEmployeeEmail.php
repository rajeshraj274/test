<?php
$json_str = file_get_contents('php://input');

$results = json_decode($json_str, true);

include '../commonService/sqlConnection.php';

if(!empty($results['UserID'])) {

      $UserID=$results['UserID'];

      $sql = "SELECT * FROM employeemaster WHERE UserID='".$UserID."' and Active='Yes'";
      //echo $sql;
      $result = $conn->query($sql);
      if($result->num_rows> 0){
            echo 'Email Already Exists';
            //$res = false;
      }
}
$conn->close();
//echo json_encode($res);
?>