<?php
include('header.php');
include('connect.php');

echo "<form action='gen.php' method='post' class='form-inline'>";
echo "<input type=text name='count' id='login'>";
$i=0;
while($i<2)
{
	$i++;
	$q=mysql_query("SELECT * FROM `professors`"); 
	$row=mysql_fetch_array($q);
	echo "<select name=".$i.">";
	do
	{
		echo "<option value=".$row['id'].">".$row['name']."</option>";
	}
	while($row=mysql_fetch_array($q));
	echo "</select>";
}
echo "<input type=submit class='btn'>";
echo "</form>";

include 'footer.php';
?>