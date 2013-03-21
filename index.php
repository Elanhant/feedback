<?php
header("Location: choice.php");
include 'header.php';
include 'connect.php';

if (!isset($_GET['code'])){
	echo "
		<form action='index.php' method='get' class='form-inline' id='loginform'>
		<input id='login' type=text name='code' placeholder='put your code here'/>
		<input class='btn' type=submit value='Войти'/> 
		</form>
	";
}else{
	$usercode=htmlspecialchars($_GET['code'], ENT_QUOTES);
	$q=mysql_query("SELECT * FROM `codes` WHERE code='".$usercode."'");
	$result=mysql_fetch_row($q);
	if (!isset($result[0])){
		//error!!!
		echo 'there is no code '.$usercode.'! Bad, bad hacker!<br/>';
		echo '<a href="index.php">Go back</a>';
	}else{
		$lect_id = $result[2];
		$pract_id = $result[3];
		$q=mysql_query("SELECT * FROM `professors` WHERE id='".$lect_id." limit 0,1'");
		$info=mysql_fetch_row($q);
		$lect_name=$info[1];
		$discipline=$info[2];
		if ($lect_id==$pract_id){
			$pract_name=$lect_name;
		}else{
			$q=mysql_query("SELECT * FROM `professors` WHERE id='".$pract_id."'");
			$info=mysql_fetch_row($q);
			$pract_name=$info[1];
		}
		echo "<b>Предмет: ".$discipline."</b><br /><br />";
		echo '<form action="work.php" method=post class="form-horizontal">';
		echo '<input type=hidden name="code" value="'.$usercode.'">';
		
		function qwe($q,$for){
			while($row=mysql_fetch_array($q)){
				if ($row["type"]!=0){
					$qwe=mysql_query("SELECT * FROM answer_names WHERE id_of_question='".$row['id']."'");
				}
				echo "<div class='question'>";
				switch ($row["type"]){
					case 0:
						echo $row['question']."<br /> <textarea rows='3' name='".$for.$row['id']."'></textarea> <br />";
						break 1;
					case 1:
						echo $row['question']."<br>";
						while ($names = mysql_fetch_array($qwe)){
							echo '<label class="radio">';
							echo "<input type=radio name='".$for.$row['id']."' value=".$names['id'].">".$names['answer']."<br />";
							echo '</label>';
						}
						break 1;
					case 2:
						echo $row['question']."<br>";
						echo "<select name='".$for.$row['id']."'>";
						while ($names = mysql_fetch_array($qwe)){
							echo "<option value=".$names['id'].">".$names['answer']."</option>";
						}
						echo "</select><br>";
						break 1;
				}
				echo "</div>";
			}
		}
		echo "<b>Теория<br />";
		echo "Преподаватель: ".$lect_name."</b><br />";
		$q=mysql_query("SELECT * FROM `questions` WHERE owner=0 and (q_to=0 or q_to=2)");
		qwe($q,"lect_");
		
		echo "<b>Практика<br />";
		echo "Преподаватель: ".$pract_name."</b><br />";
		$q=mysql_query("SELECT * FROM `questions` WHERE owner=0 and (q_to=1 or q_to=2)");
		qwe($q,"pract_");
		
		
		echo '<input type=submit value="Готово"></form>';
	}
}

include 'footer.php';
?>
