<?phpinclude 'connect.php';if(isset($_POST['mark'])){	// if (isset($_POST['code']))	// {		$usercode = htmlspecialchars($_POST['code'], ENT_QUOTES);		// $q=mysql_query("SELECT * FROM `codes` WHERE code='".$usercode."'");		// $result=mysql_fetch_row($q);		// if (isset($result[0])){		$lector = $_POST['l'];		$practic = $_POST['p'];		$mark = $_POST['mark'];		$q=mysql_query("SELECT * FROM `questions1`");		while($row=mysql_fetch_array($q))		{			$num_quest = $row['id'];			if(isset($_POST[$num_quest."_l"]))			{				$ans = htmlspecialchars($_POST[$num_quest."_l"], ENT_QUOTES);				@mysql_query("INSERT INTO `statistic` (`st_num_quest`,`st_ans`,`st_prof`,`mark`) VALUES ('$num_quest','$ans','$lector','$mark')");			}						if(isset($_POST[$num_quest."_p"]))			{				$ans = htmlspecialchars($_POST[$num_quest."_p"], ENT_QUOTES);				@mysql_query("INSERT INTO `statistic` (`st_num_quest`,`st_ans`,`st_prof`,`mark`) VALUES ('$num_quest','$ans','$practic','$mark')");				// echo $ans." : ".$num_quest."<br>";			}			if(isset($_POST[$num_quest]))			{				$ans = htmlspecialchars($_POST[$num_quest], ENT_QUOTES);				@mysql_query("INSERT INTO `statistic` (`st_num_quest`,`st_ans`,`st_prof`,`mark`) VALUES ('$num_quest','$ans',0,'$mark')");			}		}		if(isset($_POST['com_l']) && $_POST['com_l']!='')		{			$ans = htmlspecialchars($_POST['com_l'], ENT_QUOTES);			@mysql_query("INSERT INTO `comments` (`id_pr`,`comm`) VALUES ('$lector','$ans')");		}		if(isset($_POST['com_p']) && $_POST['com_p']!='')		{			$ans = htmlspecialchars($_POST['com_p'], ENT_QUOTES);			@mysql_query("INSERT INTO `comments` (`id_pr`,`comm`) VALUES ('$practic','$ans')");		}	header("Location: /thankyou.php");}echo "error";