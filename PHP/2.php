<?php
echo "<html><head>"; 
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'; 
echo "<title>Практическая 2</title>"; 
echo "</head>"; 
echo "<body>"; 
$obruch="ГПОУ ЮТК.<br/>"; 
$otdel="АИТ.<br/>"; 
$cick="ЦМК отделения АИТ.<br/>"; 
$pred="МДК 02.01.<br/>"; 
$cab="218.<br/>";
$prep="Поликарпочкин М.В.<br/>"; 
$numgr="446.<br/>"; 
$fio="Казанцев Андрей Викторович.<br/>";
$text="Название образовательного учреждения: ".$obruch."Отделение: ".$otdel."Цикловая комиссия: ".$cick."Предмет: ".$pred."Кабинет: ".$cab."Преподаватель: ".$prep."Номер группы: ".$numgr."ФИО студента: ".$fio;
echo "<p>$text</p>";
echo "</body>"; 
echo "</html>"; 
?>
