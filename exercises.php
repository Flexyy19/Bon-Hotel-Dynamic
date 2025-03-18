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

$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " 
    . $color[2] . " carpet, the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. "
    . "The new president and his first lady. - Richard M. Nixon";

    $color = array('white', 'green', 'red');

echo implode(", ", $color) . ",<br><br>";

foreach ($color as $c) {
    echo "$c<br>";
}


$x = array(1, 2, 3, 4, 5);

echo "Before deletion: ";
print_r($x);

unset($x[3]);

$x = array_values($x);

echo "<br>After deletion: ";
print_r($x);


?>
