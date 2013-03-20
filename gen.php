<?php
// include('header.php');
include('connect.php');
function KeyGen($i)
{
	$key = md5(mktime()+$i);
	$new_key = '';
	for($i=1; $i <= 10; $i ++ )
	{
		$new_key .= $key[$i];
		if ( $i%5==0 && $i != 10) 
			$new_key.='-';
	}
	return strtoupper($new_key);
}
if(isset($_POST))
{
	$fp = fopen('code.txt', 'a+');
	
	$i=0;
	// fwrite($fp,)
	$lect_id = $_POST['1'];
	$pract_id = $_POST['2'];
	$q=mysql_query("SELECT * FROM `professors` WHERE id=".$lect_id); 
	$row=mysql_fetch_array($q);
	$lector = $row['name'];
	$q1=mysql_query("SELECT * FROM `professors` WHERE id=".$pract_id); 
	$row=mysql_fetch_array($q1);
	$practic = $row['name'];
	$str = "Лектор: ".$lector."; Практик: ".$practic."\n\n";
	fwrite($fp,$str);
	
	while($i<$_POST['count'])
	{
		$url = "http://urfu.telenet.ru";
		// fwrite($fp,"");
		$code = KeyGen($i);
		$str = $url." ".$code;
		fwrite($fp,$str);
		@mysql_query("INSERT INTO `codes` (`code`,`lect_id`,`pract_id`) VALUES ('$code','$lect_id','$pract_id')");
		$i++;
		fwrite($fp,"\n\n");
	}
	fwrite($fp,"\n");
	fwrite($fp,"===============================");
	fclose($fp);
	header('Location: gen_view.php');
}
else
{
	header('Location: index.php');
}
?>