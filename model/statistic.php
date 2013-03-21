<?

// MODEL STATISTIC
include 'connect.php';
	function get_prof()
	{
		$q1=mysql_query("SELECT * FROM `professors1`");
		while($row=mysql_fetch_array($q1))
		{
			if($row['type']==1)
			{
				$array['lec'][] = $row;
			}
			elseif($row['type']==2)
			{
				$array['pr'][] = $row;
			}
		}
		return $array;
	}
	
	function lol($id)
	{
		$q = mysql_query("SELECT spq.fio, spq.number, spq.text, a.ans_text, a.price FROM (SELECT * FROM (SELECT s.`st_num_quest`,s.`st_ans`, p.`fio` FROM `statistic` as s CROSS JOIN `professors1` as p on s.st_prof = p.id where p.id=".$id.") as sp CROSS JOIN `questions1` as q on sp.st_num_quest = q.id) as spq CROSS JOIN `answers1` as a on a.id = spq.st_ans");
		while($row=mysql_fetch_array($q))
		{
			$array[] = $row;
			$fio = $row['fio'];
		}
		return array($fio, $array);
	}

?>