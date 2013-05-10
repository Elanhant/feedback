<form action='' method=post>
<!--	// echo '<input type=hidden name="code" value="--><?//=$usercode?><!--">-->
	<input type=hidden name="l" value="<?=$lector?>">
	<input type=hidden name="p" value="<?=$practik?>">
	<?// Первый вопрос?>
	<div class=question>
	<span class='quest-text'>1. Для каждого утверждения поставьте оценку от 1 до 4, либо н/о, если затрудняетесь с ответом.</span>
	<table>
	<thead><td></td><td>Лекции</td><td>Практические занятия</td></thead>
	<tbody>
	<?
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
    ?>
    </tbody>
	</table>
	<div>
	<br>
	<?//Второй вопрос?>
	<div class='question'>
        <?
        $controller->radio_vopros($questions,1);
        ?>
	</div>
	<br>
	<?//3 вопрос?>
    <div class='question'>
        <?
        $controller->radio_vopros($questions,2);
	    ?>
    </div>
	<br>
	<?//4 вопрос?>
	<div class='question'>
        <?
        $controller->radio_vopros($questions,3);
        ?>
	</div>
<!--		//сделать функцию которая будет выводить вопросы типа радио. лол (done)-->
	<br>
	<?//5 вопрос?>
		<div class='question'>
		<?foreach($questions[4]['quest'] as $quest)
		{?>
			<span class='quest-text'>5<?=$quest['text']?></span><br>
			<table>
			<tr>
			<td></td>
			<?
            foreach($questions[4]['ans'] as $ans)
			{
				echo "<td>".$ans['ans_text']."</td>";
			}?>
			</tr>
			<tr style='background:#EFEFEE'>
			<td>Учитель Теории</td>
			<?
            foreach($questions[4]['ans'] as $ans)
			{
				echo "<td><input value='".$ans['id']."' type=radio name='".$quest['id']."_l' checked></input></td>";
			}
            ?>
			</tr>
			<tr>
			<td>Учитель Практики</td>
			<?foreach($questions[4]['ans'] as $ans)
			{
			    echo "<td><input value='".$ans['id']."' type=radio name='".$quest['id']."_p' checked></input></td>";
			}
			?>
			</tr>
			</table>
		<?}?>
		</div>
		<br>
	<?//6 вопрос?>
		<div class='question'>
            <?
            $controller->radio_vopros($questions,5);
            ?>
		</div>
		<br>
	<?//7 вопрос?>
<!--		// <div class='question'>-->
<!--			// radio_vopros($questions,6);-->
<!--		// </div>-->
<!--		// <br>-->
		
		
	<?// вопрос про сдачу?>
		<div class='question'>
		<span class='quest-text'>
		7. Какую оценку вы получили за экзамене?</span>
		<label class=radio>
		<input value='1' type=radio name='mark' checked> 5 </input><br> 
		</label>
		<label class=radio>
		<input value='1' type=radio name='mark'> 4 </input><br> 
		</label>
		<label class=radio>
		<input value='1' type=radio name='mark'> 3 </input><br> 
		</label>
		<label class=radio>
		<input value='0' type=radio name='mark'> Не сдал/не допущен</input><br> 
		</label>
		</div>
		<br>
	<?// ===================== надо переписать, время 2:04, а мне утром на работу, пиздец (тяп ляп и в продакшн)
	//8 вопрос?>
		<div class='question'>
			<?foreach($questions[7]['quest'] as $quest)
			{
				echo "<span class='quest-text'>8.".$quest['text']."</span><br>";
				// <textarea name='".$quest['id']."'></textarea>";
				echo "<div style='float:left;padding-right:20px;'>";
				echo "<p>Лектор</p>";
				echo "<textarea name='com_l'></textarea>";
				echo "</div >";
				echo "<div style='display: inline-block;'>";
			    echo "<p>Практик</p>";
				echo "<textarea name='com_p'></textarea>";
				echo "</div>";
			}?>
			
		</div>
		<br>
		<input type=submit>
		</form>