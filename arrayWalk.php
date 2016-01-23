<h2>Utilizzo di funzioni su array</h2>
<?php
$frutta = array ("uno"=>"limone", "due"=>"arancia",
"tre"=>"banana");
function modifica (&$elemento, $chiave, $prefisso) { /* write */
$elemento = "$prefisso:::::::::: $elemento"; }
function stampa ($elemento, $chiave) { /* read */
echo "$chiave: $elemento<br>\n"; }
echo "<h3>Prima ...:\n</h3>";
array_walk ($frutta, 'stampa');
array_walk ($frutta, 'modifica', 'frutto');
echo "<h3>... e dopo:\n</h3>";
array_walk ($frutta, 'stampa');
?>