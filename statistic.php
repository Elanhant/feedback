<?
include 'header.php';
include 'connect.php';
echo "<form action='statistic.php' method='post' class='form-inline'>";
	$q=mysql_query("SELECT * FROM `professors`"); 
	echo "<select name='prof'>";
	while($row=mysql_fetch_array($q))
	{
		echo "<option value=".$row['id'].">".$row['name']."</option>";
	}
	echo "</select>";
	echo "<input type=submit class='btn'>";
	echo "</form>";

if(isset($_POST['prof']))
{
	$id_prof = htmlspecialchars($_POST['prof'],ENT_QUOTES);
	$q1=mysql_query("SELECT * FROM `professors` WHERE id='$id_prof'");
	$prof = mysql_fetch_array($q1);
	
	
	/*
	q=29
	70 = 5
	71 = 4
	72 = 3
	73 = looser
	*/
	
	//КТО-НИБУДЬ, УМОЛЯЮ, ПЕРЕПИШИТЕ ЭТОТ ЗАПРОС, ЭТО ПОЛНЫЙ ПИПЕЦ
	$diffnames = array('70'=>'отлично','71'=>'хорошо','72'=>'удовл.','73'=>'не сдал');
	$query=mysql_query("SELECT * FROM `answers` WHERE `id_of_question`=29");
	$diff=array();
	while($row=mysql_fetch_array($query))
	{
		if (!isset($diff["".$row['answer']])){
		$diff[$row['answer']]=array();}
		array_push($diff[$row['answer']],$row['who']);
	}
	// echo var_dump($diff);
	
	function qqq($lectpract,$id_prof,$diff,$diffnames){
		$q1=mysql_query("SELECT * FROM `questions` WHERE (owner='$id_prof' or owner=0) and (`q_to`=2 or `q_to`=$lectpract)");
		while($row1=mysql_fetch_array($q1))
		{
			echo($row1['question']."<br>");
			if($row1['type']==0){
				$q2=mysql_query("SELECT * FROM answers WHERE id_of_question='".$row1['id']."' and id_of_prof='$id_prof' and lect_or_pract='$lectpract'");
				while($row2=mysql_fetch_array($q2)){
					if ($row2['answer']!=""){
						echo ">>".$row2['answer']."<br>";
					}
				}
			}else{
				$q2=mysql_query("SELECT * FROM answer_names WHERE id_of_question='".$row1['id']."'");
				while($row2=mysql_fetch_array($q2))
				{
					// $row2 = mysql_fetch_array($q2);
					echo $row2['answer']." : ";
					$q=mysql_query("SELECT COUNT(*) FROM `answers` 
							WHERE answer='".$row2['id']."' 
							and id_of_prof='$id_prof' 
							and lect_or_pract='$lectpract'");
						
					$count_ans = mysql_fetch_row($q);
					echo "<i>$count_ans[0]</i> , из них ";
					// foreach($diff as $k => $e) {
					for($i=70;$i<74;$i++){
						echo "<span class='mark'>".$diffnames["$i"].": </span>";
						$marks=implode(" or `who`=",$diff["$i"]);
						$q=mysql_query("SELECT COUNT(*) FROM `answers` 
							WHERE answer='".$row2['id']."' 
							and id_of_prof='$id_prof' 
							and lect_or_pract='$lectpract'
							and (`who`=".$marks.")");
						
						$count_ans = mysql_fetch_row($q);
						echo "<i>$count_ans[0]</i> , ";
					}
					echo "<br/>";
				}
			}
			echo("<br>");
		}
	}
	
	echo "<b>".$prof['name']."<br />";
	echo $prof['discipline']."</b><br />";
	
	$qqqu=mysql_query("SELECT COUNT(*) FROM answers WHERE id_of_prof='$id_prof' and lect_or_pract=0");
	// echo "SELECT COUNT(*) FROM answers WHERE id_of_prof='$id_prof' and lect_or_pract=0";
	$count_ans = mysql_fetch_row($qqqu);
	if ($count_ans[0]!=0){
		echo "<b>Теория</b><br />";
		qqq(0,$id_prof,$diff,$diffnames);
	}
	echo "<b>Практика</b><br />";
	qqq(1,$id_prof,$diff,$diffnames);
	
	
	
}
include 'footer.php';
?>