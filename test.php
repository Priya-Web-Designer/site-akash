<?php

$a = 5;
for ($i = 1; $i <= $a; $i++) {
    for ($row = $a; $row > ($a - $i); $row--) {
        echo "&nbsp;";
    }
    for ($j = $a; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br/>";
}
?>

<?php

$num = 5;
for ($i = 1; $i <= $num; $i++) {
    for ($sap = 1; $sap <= ($num - $i); $sap++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= $a; $i++) {
    for ($row = $a; $row > ($a - $i); $row--) {
        echo "&nbsp;";
    }
    for ($j = $a; $j >= $i + 1; $j--) {
        echo "*";
    }
    echo "<br/>";
}
?>