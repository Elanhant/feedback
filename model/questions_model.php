<?
	include 'connect.php';
	function get_question($num)
	{
		$q1=mysql_query("SELECT * FROM `questions1` WHERE `questions1`.number='".$num."'");
		$q2=mysql_query("SELECT * FROM `answers1` WHERE `answers1`.num_ques='".$num."'");
		while($row=mysql_fetch_array($q1))
		{
			$array['quest'][] = $row;  
		}
		while($row=mysql_fetch_array($q2))
		{
			$array['ans'][] = $row;  
		}		
		return $array;
	}
	
	function get_questions($count)
	{
		for($i=0;$i<$count;$i++)
		{
			$array[$i] = get_question($i+1); 
		}
		return $array;
	}
	
	function radio_vopros($questions,$i)
	{
		foreach($questions[$i]['quest'] as $quest)
		{
			echo "<span class='quest-text'>";
			echo $i+1;
			echo ".".$quest['text']."</span>";
			foreach($questions[$i]['ans'] as $ans)
			{
				echo "<label class=radio>";
				echo "<input value='".$ans['id']."_".$quest['whom']."' type=radio name='".$ans['num_ques']."'>   ".$ans['ans_text']."</input><br>"; 
				echo "</label>";
			}
		}
	}
?>