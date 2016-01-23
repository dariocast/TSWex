<?php function cmp ($a, $b) {
if ($a == $b)
return 0;
return ($a < $b) ? -1 : 1;
}
$arr = array (3, 2, 5, 6, 1);
echo "stampo l'array<br>";
while (list ($chiavve, $vallore) = each ($arr)) {
echo "$chiavve: $vallore<br>"; }

usort ($arr, "cmp");

echo "stampo l'array ordinato<br>";
while (list ($chiavve, $vallore) = each ($arr)) {
echo "$chiavve: $vallore<br>"; } ?>