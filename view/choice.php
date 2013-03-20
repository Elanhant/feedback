<?
// VIEW CHOICE

	echo "<div id=choice>";
	echo "<form action=testtest.php method=post>";
		echo "<label>Лектор</label>";
		echo "<select name=lec>";
			foreach($professors['lec'] as $prep)
			{
				echo "<option value='".$prep['id']."'>".$prep['fio']."</option>";
			}
		echo "</select>";
		echo "<label>Практик</label>";
		echo "<select name=pr>";
			foreach($professors['pr'] as $prep)
			{
				echo "<option value='".$prep['id']."'>".$prep['fio']."</option>";
			}
		echo "</select>";
		echo "<input type=submit></input>";
	echo "</form>";
	echo "</div>";

?>