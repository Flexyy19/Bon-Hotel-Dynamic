<?php
for ($i = 1; $i <= 10; $i++) {
        if ($i < 10) {
            echo $i . '-';
        } else {
            echo $i;
        }
    }
    $total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "The total sum of integers between 0 and 30 is: $total";
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>