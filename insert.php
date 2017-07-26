<?php
$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('localhost','u210080730_msg','');
mysql_select_db('',$con);

mysql_query("INSERT INTO logs ('username','msg')VALUES ('$uname','$msg')");

$result = mysql_query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result)){
  echo $extract('username') . ": " . $extract('msg') ."<br>";
  }

?>
