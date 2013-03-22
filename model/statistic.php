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
	
	function first($prepod,$vopros_id=0)
	{
		$q = mysql_query("SELECT * FROM(SELECT spq.fio, spq.number, spq.text, spq.id, a.ans_text, a.price, spq.mark FROM (SELECT * FROM (SELECT s.`st_num_quest`,s.`st_ans`, p.`fio`,s.`mark` FROM `statistic` as s CROSS JOIN `professors1` as p on s.st_prof = p.id where p.id =".$prepod.") as sp CROSS JOIN `questions1` as q on sp.st_num_quest = q.id) as spq CROSS JOIN `answers1` as a on a.id = spq.st_ans ORDER BY `spq`.`number` ASC, spq.id asc) as aspq where aspq.number = 1");
		if($q)
		{
			$all = 0;
			$neo = 0;
			$i=1;$j=1; //счётчики
			while($row=mysql_fetch_array($q))
			{
				
				$array[$row[id]]['text']=$row['text'];
				$fio = $row['fio'];
				$array[$row[id]]['all'] += $row['price'];
				if($row['mark']==1)
				{
					$array[$row[id]]['neo'] += $row['price']; 
				}
				$i++;
				$j++;
				$array[$row[id]]['all'] /=$i;
				$array[$row[id]]['neo'] /=$j;
			}
			return array($fio, $array);
		}
		return array();
	}
	
	function get_all_ans($num)
	{
		$qq = mysql_query("SELECT * FROM answers1 WHERE num_ques=".$num."");
		while($row=mysql_fetch_array($qq))
		{
			$array[] = $row['ans_text'];
		}
		return $array;
	}
	
	function other_q($prepod)
	{
		$q = mysql_query("SELECT * FROM(SELECT spq.fio, spq.number, spq.text, spq.id, a.ans_text, a.price, spq.mark FROM (SELECT * FROM (SELECT s.`st_num_quest`,s.`st_ans`, p.`fio`,s.`mark` FROM `statistic` as s CROSS JOIN `professors1` as p on s.st_prof = p.id where p.id =".$prepod.") as sp CROSS JOIN `questions1` as q on sp.st_num_quest = q.id) as spq CROSS JOIN `answers1` as a on a.id = spq.st_ans ORDER BY `spq`.`number` ASC, spq.id asc) as aspq where aspq.number != 1");
		// $get_all_ans($num);
		$num=0;
		while($row=mysql_fetch_array($q))
		{
			if($num == $row['number'])
			{
				//мне лень переписывать это :D мало ли пригодиться
			}
			else
			{
				$num = $row['number'];
				$vop[] = $num; // номера вопросов
				$variants[$num] = get_all_ans($num);
				$quest[$num] = $row['text'];
				foreach($variants[$num] as $v)
				{
					$array[$num][$v]['stat'] = 0;
					$array[$num][$v]['mark'] = 0;
				}
			}
			$array[$num][$row['ans_text']]['stat']++;
			if($row['mark']==1)
			{
				$array[$num][$row['ans_text']]['mark']++;
			}
		}
		return array($vop,$variants,$quest,$array);
	}
	function get_comments($prepod)
	{
			$q = mysql_query("SELECT * FROM comments WHERE id_pr=".$prepod."");
			if($q)
			{
				while($row=mysql_fetch_array($q))
				{
					$array[]=$row['comm'];
				}
				return $array;
			}
			else
			{
				return 0;
			}
	}
?>