<?php
include 'connect.php';
$q =  htmlspecialchars($_POST["question"], ENT_QUOTES);
$type = htmlspecialchars($_POST["type"], ENT_QUOTES);
$for = htmlspecialchars($_POST["for"], ENT_QUOTES);
switch ($type) {
    case "text":
        $type = 0;
        break;
    case "radio":
        $type = 1;
        break;
    case "select":
        $type = 2;
        break;
}
$answers = htmlspecialchars($_POST["answers"], ENT_QUOTES);
$answers = preg_split('/\|/' , $answers);
// echo $q;
// echo "<br>";
// echo $type."<br>";
// foreach ($answers as $a) {
	// echo $a."<br>";
// }
@mysql_query("INSERT INTO questions (`question`,`type`,`owner`,`q_to`)VALUES ('$q','$type',0,$for)");
$q=mysql_query("SELECT LAST_INSERT_ID() FROM questions");
$row=mysql_fetch_row($q);
$q_id = $row[0];

if ($type==1 || $type==2){
	foreach ($answers as $a) {
	@mysql_query("INSERT INTO answer_names (`id_of_question`,`answer`)VALUES ('$q_id','$a')");
	}
}
header("location:add_q_form.php");

?>