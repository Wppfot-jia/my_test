<?php
header("content-type:text/html;charset=utf-8");

$conn = @mysql_connect('localhost','root','');

mysql_select_db('forecast');

mysql_query("set names utf8");

$sql = "select * from data";

$res = mysql_query($sql);

while($row = mysql_fetch_assoc($res)){
    $rows[] = $row;
}

  var_dump($rows);

  echo $rows;
?>