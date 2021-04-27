<?php
require_once "train.php";
$trains = [];
for ($i = 0; $i < 5; $i++) {
    $deptime = rand(1619527980, (1619527980 + (60 * 60 * 24)));
    $arrival = rand(3600, 3600 * 3);
    $trains[] = new train($i, $deptime, $arrival);
}
foreach ($trains as $train) {
    $train->getTime();
}
