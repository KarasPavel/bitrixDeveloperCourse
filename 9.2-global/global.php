<?
echo $_SERVER["DOCUMENT_ROOT"];

//тут вставляем компонент новичка, который делает вот что:
$_SERVER["DOCUMENT_ROOT"] = '/newpath';

//и вы к нему ниже радостно обращаетесь:
echo '<br/>';
echo $_SERVER["DOCUMENT_ROOT"];
?>