<?php
//database Connection

$con = mysqli_connect("localhost", "root", "", "env-complaints" );

//If not connected to DB
if(!$con) {
  die('Connection Failed'. mysqli_connect_error());
}
?>