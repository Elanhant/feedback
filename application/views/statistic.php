<?
// всё равно переделывать, оставлю это так
echo "<a href=''> < Назад </a>";
echo "<br>";
if(!$fio)
    echo "У этого преподователя нет данных";
else {
echo "<h1>".$fio."</h1>";
echo "<br>";

$question = '';
echo "<table>";
echo "<tbody>";
echo "<tr>";
foreach ($data as $row)
{
	echo "<td style='padding:10px'>";
		echo "<table border=1px>";
			echo "<tr>";
			echo "<td>";
			echo $row['text'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
				echo "Все: ".$row['all'];
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
				echo "Сдали: ".$row['neo'];
			echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</td>";
}
echo "</tbody>";
echo "</tr>";
echo "</table>";
echo "<br>";
foreach($vop as $v)
{
	echo "<p>".$quest[$v]."</p>";
	echo "<table border=1px>";
	foreach($variants[$v] as $var)
	{
		echo "<tr>";
			echo "<td>";
				echo $var;
			echo "</td>";
			echo "<td>";
				echo $data1[$v][$var]['stat'];
			echo "</td>";
			echo "<td>";
				echo "Сдало";
			echo "</td>";
			echo "<td>";
				echo $data1[$v][$var]['mark'];
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
}

echo "<div class=comments>";
if($comments == 0)
{
	echo "Комментариев нет";
}
else
{
	echo "Комментарии: ";echo "<br>";
	foreach($comments as $comment)
	{
		echo "<div class=comment>";
			echo $comment;
		echo "</div>";
	}
}
}
?>