<? include 'header.php'; ?>
<form action="add_question.php" method="post">
question:
<input name="question"><br />
type:<br />
<input type=radio name="type" value="text">text<br />
<input type=radio name="type" value="radio">radio<br />
<input type=radio name="type" value="select">select<br />
for:<br />
<input type=radio name="for" value="0">Lecturer<br />
<input type=radio name="for" value="1">Practi..???<br />
<input type=radio name="for" value="2">Both<br />
ans [a1|a2|a3|..] :
<input name="answers">
<button  type=submit>Submit</button>
</form>
<? include 'footer.php'; ?>