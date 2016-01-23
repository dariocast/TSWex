<h2>Utilizzo di array_filter</h2>
<?php
function dispari($var) { return ($var % 2); }
function pari($var) { return (!($var % 2)); }
$array1 = array ("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array (6, 7, 8, 9, 10, 11, 12);
echo "<h3>Array iniziali :</h3>\n";
echo "Array (";
foreach($array1 as $chiave => $valore)echo"[$chiave] => $valore ";
echo ")<br>Array (";
foreach($array2 as $chiave => $valore)echo"[$chiave] => $valore ";
echo ")";
echo "<h3>Applico la funzione 'dispari' al primo array :</h3>\n";
print_r(array_filter($array1, "dispari"));
echo "<h3>Applico la funzione 'pari' al secondo array:\n</h3>";
print_r(array_filter($array2, "pari"));
?>
?>