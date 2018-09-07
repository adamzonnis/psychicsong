<?php
$dbc = mysql_connect('localhost','psychic4_visitor','w3DD1Ng');
if(!$dbc) {die('cannot connect:' .mysql_error());}

$curdb = mysql_select_db('psychic4_chakra', $dbc);
if(!$curdb) {die('cannot connect to current db:' .mysql_error());} 
$choice1 = rand(1, 21);
$query = mysql_query("SELECT * FROM angelcards WHERE id =".$choice1);
$row = mysql_fetch_array($query);
$card1 = $row['card'];
echo '<center><img src="cards/' .$card1. '" alt="' .$choice1. '" title="' .$name1. '" /></center>';
?>