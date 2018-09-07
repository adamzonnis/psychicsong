<? php
$dbc = mysql_connect('localhost','psychic4_visitor','w3DD1Ng') or die('cannot connect:' .mysql_error());
if(!$dbc) {die('cannot connect:' .mysql_error());}

$curdb = mysql_select_db('psychic4_chakra', $dbc);
if(!$curdb) {die('cannot connect to current db:' .mysql_error());} 
?>
