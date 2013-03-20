<?php

if(isset($_POST['lec']) && isset($_POST['pr']))
{
	require_once ("model/questions_model.php");
	$lector = $_POST['lec'];
	$practik = $_POST['pr'];
	$questions = get_questions(8);
	include 'view/header.php';
	include "view/opros.php";
	include 'view/footer.php';
}
else
{
	header('Location: choice.php');
}
?>