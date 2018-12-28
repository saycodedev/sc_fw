<?php
if(isset($_REQUEST['case'])!=''){
  $case_model = $_REQUEST['case'];
  echo  $case_model();
}

function query_login($u_username,$u_password)
{
   include 'config/database.php';
$query = $conn->query("SELECT * FROM office  WHERE office_username='$u_username' AND office_password='$u_password'");
$result = $query->fetch_assoc();
 if ($result) {
  $_SESSION['id'] = $result['office_id'];
    $_SESSION['name'] = $result['office_name'];
      $_SESSION['picture'] = $result['office_picture'];
        $_SESSION['permission'] = $result['office_permission'];
  $data = 'logged';
}else{
    $data = 'unlogged';
}
return $data;
}


function query_logout()
{
 session_destroy();
}



 ?>
