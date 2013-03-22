<?
	echo "<form action=../model/handling.php method=post>";
	// echo '<input type=hidden name="code" value="'.$usercode.'">';
	echo '<input type=hidden name="l" value="'.$lector.'">';
	echo '<input type=hidden name="p" value="'.$practik.'">';
	// Первый вопрос
	echo "<div class=question>";
	echo "<span class='quest-text'>1. Для каждого утверждения поставьте оценку от 1 до 4, либо н/о, если затрудняетесь с ответом.</span>";
	echo "<table>";
	echo "<thead><td></td><td>Лекции</td><td>Практические занятия</td></thead>";
	echo "<tbody>";
	$i=0;
	foreach($questions[0]['quest'] as $quest)
	{
		$i++;
		if($i%2!=0)
			$style = "style='background:#EFEFEE'";
		else
			$style = '';
		echo "<tr ".$style.">";	
		echo "<td>".	$quest['text']."</td>";
		echo "<td><select name='".$quest['id']."_l'>";
		foreach($questions[0]['ans'] as $ans)
		{
			echo "<option value='".$ans['id']."'>".$ans['ans_text']."</option>"; 
		}
		echo "</select></td>";
		echo "<td><select name='".$quest['id']."_p'>";
		foreach($questions[0]['ans'] as $ans)
		{
			echo "<option value='".$ans['id']."'>".$ans['ans_text']."</option>"; 
		}
		echo "</select></td>";
		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
	echo "<div>";
	echo "<br>";
	//Второй вопрос
	echo "<div class='question'>";
		radio_vopros($questions,1);
	echo "</div>";
	echo "<br>";
	//3 вопрос
	echo "<div class='question'>";
		radio_vopros($questions,2);
	echo "</div>";
	echo "<br>";
	//4 вопрос
	echo "<div class='question'>";
		radio_vopros($questions,3);
	echo "</div>";
		//сделать функцию которая будет выводить вопросы типа радио. лол (done)
	echo "<br>";
	//5 вопрос
		echo "<div class='question'>";
		foreach($questions[4]['quest'] as $quest)
		{
			echo "<span class='quest-text'>5.".$quest['text']."</span><br>";
			echo "<table>";
			echo "<tr>";
			echo "<td></td>";
			foreach($questions[4]['ans'] as $ans)
			{
				echo "<td>   ".$ans['ans_text']."</td>"; 
			}
			echo "</tr>";
			echo "<tr style='background:#EFEFEE'>";
			echo "<td>Учитель Теории</td>";
			foreach($questions[4]['ans'] as $ans)
			{
				echo "<td><input value='".$ans['id']."' type=radio name='".$quest['id']."_l' checked></input></td>"; 
			}
			echo "</tr>";
			echo "<tr>";
			echo "<td>Учитель Практики</td>";
			foreach($questions[4]['ans'] as $ans)
			{
				echo "<td><input value='".$ans['id']."' type=radio name='".$quest['id']."_p' checked></input></td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		echo "</div>";
		echo "<br>";
	//6 вопрос
		echo "<div class='question'>";
			radio_vopros($questions,5);
		echo "</div>";
		echo "<br>";
	//7 вопрос
		// echo "<div class='question'>";
			// radio_vopros($questions,6);
		// echo "</div>";
		// echo "<br>";
		
		
	// вопрос про сдачу
		echo "<div class='question'>";
		echo "<span class='quest-text'>";
		echo "7. Какую оценку вы получили за экзамене?</span>";
		echo "<label class=radio>";
		echo "<input value='1' type=radio name='mark' checked> 5 </input><br>"; 
		echo "</label>";
		echo "<label class=radio>";
		echo "<input value='1' type=radio name='mark'> 4 </input><br>"; 
		echo "</label>";
		echo "<label class=radio>";
		echo "<input value='1' type=radio name='mark'> 3 </input><br>"; 
		echo "</label>";
		echo "<label class=radio>";
		echo "<input value='0' type=radio name='mark'> Не сдал/не допущен</input><br>"; 
		echo "</label>";
		echo "</div>";
		echo "<br>";
	// ===================== надо переписать, время 2:04, а мне утром на работу, пиздец (тяп ляп и в продакшн)
	//8 вопрос
		echo "<div class='question'>";
			foreach($questions[7]['quest'] as $quest)
			{
				echo "<span class='quest-text'>8.".$quest['text']."</span><br>";
				// echo "<textarea name='".$quest['id']."'></textarea>";
				echo "<div style='float:left;padding-right:20px;'>";
				echo "<p>Лектор</p>";
				echo "<textarea name='com_l'></textarea>";
				echo "</div >";
				echo "<div style='display: inline-block;'>";
				echo "<p>Практик</p>";
				echo "<textarea name='com_p'></textarea>"; 
				echo "</div>";
			}
			
		echo "</div>";
		echo "<br>";
		echo "<input type=submit>";
		echo "</form>";
?>