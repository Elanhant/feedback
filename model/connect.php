<?php
if (!$con){
$con=@mysql_connect('localhost','root','') or die('�� ������� ����������� � �������� '.mysql_error());
@mysql_select_db('surveys')or die('�� ������� ����������� � �� '.mysql_error());
}
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
?>