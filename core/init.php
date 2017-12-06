<?php
$db = mysqli_connect('127.0.0.1','root','','Denam');
if(mysqli_connect_errno()) {
  echo 'Database Connection failed with follwing errors: '.mysql_connect_error();
  die();
}
