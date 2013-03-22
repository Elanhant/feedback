<?
$mes = "Сочувствую, вы зашли на сайт с Internet Explorer. И за всё, что дальше будет происходить, я ответсвенности не несу.<br>У Вас есть два выхода:
<a href='http://www.google.com/chrome'>скачать</a> нормальный браузер или продолжить <a href='/choice.php'>дальше</a>";
if ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0') ) echo $mes;
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0') ) echo $mes;
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') ) echo $mes;
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.0') ) echo $mes;
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 10.0') ) echo $mes;
else header ('Location: choice.php');
?>