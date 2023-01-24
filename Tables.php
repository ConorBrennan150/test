<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$UserWord = $_GET["UserWord"];
$MAX_ROW = strlen($UserWord);
$MAX_COL = strlen($UserWord);
$UserWord = str_split($UserWord);
$UserWordBack = $_GET["UserWord"];
$UserWordBack = str_split($UserWordBack);

$a ="";
$b = "";
$c = "";
$d = "";
$e = "";
$f = "";
$g = "";
$h = "";
$i = "";
$j = "";
$k = "";
$l = "";
$m = "";
$n = "";
$o = "";
$p = "";
$q = "";
$r = "";
$s = "";
$t = "";

foreach ($UserWord as $key) {
  $a = $UserWord[0];
  $b = $UserWord[1];
  $c = $UserWord[2];
  $d = $UserWord[3];
  $e = $UserWord[4];
  $f = $UserWord[5];
  $g=  $UserWord[6];
  $h = $UserWord[7];
  $i = $UserWord[8];
  $j = $UserWord[9];
}
foreach ($UserWordBack as $key) {
  $k = $UserWordBack[0];
  $l = $UserWordBack[1];
  $m = $UserWordBack[2];
  $n = $UserWordBack[3];
  $o = $UserWordBack[4];
  $p = $UserWordBack[5];
  $q = $UserWordBack[6];
  $r = $UserWordBack[7];
  $s = $UserWordBack[8];
  $t = $UserWordBack[9];
}
$dataSet1 = array (
  array($a, " ", " ", " ", " ", " ", " ", " "," "," "),
  array(" ", $b, " ", " ", " ", " ", " ", " "," "," "),
  array(" ", " ", $c, " ", " ", " ", " ", " "," "," "),
  array(" ", " ", " ", $d, " ", " ", " ", " "," "," "),
  array(" ", " ", " ", " ", $e, " ", " ", " "," "," "),
  array(" ", " ", " ", " ", " ", $f, " ", " "," "," "),
  array(" ", " ", " ", " ", " ", " ", $g, " "," "," "),
  array(" ", " ", " ", " ", " ", " ", " ", $h," "," "),
  array(" ", " ", " ", " ", " ", " ", " ", " ",$i," "),
  array(" ", " ", " ", " ", " ", " ", " ", " "," ",$j)
);
$dataSet2 = array (
  array(" ", " ", " ", " ", " ", " ", " ", " "," ",$k),
  array(" ", " ", " ", " ", " ", " ", " ", " ",$l,""),
  array(" ", " ", " ", " ", " ", " ", " ", $m," "," "),
  array(" ", " ", " ", " ", " ", " ", $n, " "," "," "),
  array(" ", " ", " ", " ", " ", $o, " ", " "," "," "),
  array(" ", " ", " ", " ", $p, " ", " ", " "," "," "),
  array(" ", " ", " ", $q, " ", " ", " ", " "," "," "),
  array(" ", " ", $r, " ", " ", " ", " ", " "," "," "),
  array(" ", $s, " ", " ", " ", " ", " ", " "," "," "),
  array($t, " ", " ", " ", " ", " ", " ", " "," "," ")
);
function createTableForward($dataSet1, $MAX_ROW, $MAX_COL){
  echo "<table>";
  for ($row = 0; $row < $MAX_ROW; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $MAX_COL; $col++) {
      echo "<td>".$dataSet1[$row][$col]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
function createTableBackwards($dataSet2, $MAX_ROW, $MAX_COL){
  echo "<table>";
  for ($row = 0; $row < $MAX_ROW; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $MAX_COL; $col++) {
      echo "<td>".$dataSet2[$row][$col]."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
  <?php
  createTableForward($dataSet1, $MAX_COL, $MAX_ROW);
  echo "<br>";
  createTableBackwards($dataSet2, $MAX_COL, $MAX_ROW);
  ?>
</body>
</html>
