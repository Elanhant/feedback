<?

// VIEW STATISTIC
echo $fio;

foreach ($data as $row)
{
	$question = $row['text'];
	$answer = $row['ans_text'];
	echo $question." : ".$answer."<br>";
}

?>