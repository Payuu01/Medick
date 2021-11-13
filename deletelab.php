<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from lab_tbl where lab_id='$userid'";
  mysql_query($sql, $con);

   header('location:lab.php');
?>