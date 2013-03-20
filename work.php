<?php
include 'connect.php';
if(isset($_POST))
{
	if (isset($_POST['code'])){
		$usercode = htmlspecialchars($_POST['code'], ENT_QUOTES);
		$q=mysql_query("SELECT * FROM `codes` WHERE code='".$usercode."'");
		$result=mysql_fetch_row($q);
		if (isset($result[0])){
			$q=mysql_query("SELECT * FROM `answers` Order by `who` desc");
			$res=mysql_fetch_row($q);
			if (isset($res[0])){
				$who=$res[5]+1;
			}else{
				$who=1;
			}
			$lect_id = $result[2];
			$pract_id = $result[3];
			$q=mysql_query("SELECT * FROM `questions` WHERE (owner=0 or owner=".$lect_id.")");
			while($row=mysql_fetch_array($q))
			{
				if(isset($_POST["lect_".$row['id']]))
				{
					$ans = htmlspecialchars($_POST["lect_".$row['id']], ENT_QUOTES);
					$id = $row['id'];
					@mysql_query("INSERT INTO `answers` (`id_of_question`,`answer`,`id_of_prof`,`lect_or_pract`,`who`) VALUES ('$id','$ans','$lect_id',0,'$who')");
				}
				
			}
			$q=mysql_query("SELECT * FROM `questions` WHERE (owner=0 or owner=".$pract_id.")");
			while($row=mysql_fetch_array($q))
			{
				if(isset($_POST["pract_".$row['id']]))
				{
					$ans = htmlspecialchars($_POST["pract_".$row['id']], ENT_QUOTES);
					$id = $row['id'];
					@mysql_query("INSERT INTO `answers` (`id_of_question`,`answer`,`id_of_prof`,`lect_or_pract`,`who`) VALUES ('$id','$ans','$pract_id',1,'$who')");
				}
			}
			@mysql_query("DELETE FROM `codes` WHERE code='".$usercode."'");
		}
	}
}
header('Location: thankyou.php');
?>