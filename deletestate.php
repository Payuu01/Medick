<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from state_tbl where state_id='$userid'";
  mysql_query($sql, $con);

   header('location:states.php');
?>