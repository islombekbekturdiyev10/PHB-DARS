<?php
$massiv = [85,15,57,68,18,67,7,45,69,21,1,5,98,34];
$m = 92;
$y = 0;

for ($i = 0; $i < count($massiv); $i++) {
    if ($m > $massiv[$i]) {
        $y = $massiv[$i] ** 2;
    }
}

echo $y;
?>/