<div id=choice>
	<form action="opros" method=post>
		<label>Лектор</label>
		<select name=lec>
			<?
			foreach($professors['lec'] as $prep)
			{
				echo "<option value='".$prep['id']."'>".$prep['fio']."</option>";
			}
			?>
		</select>
		<label>Практик</label>
		<select name=pr>
			<?
			foreach($professors['pr'] as $prep)
			{
				echo "<option value='".$prep['id']."'>".$prep['fio']."</option>";
			}
			?>
		</select>
		<input type=submit />
	</form>
</div>