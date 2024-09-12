<?php

$array = [1,2,2,3,4,4,5];
$semDuplicatas = [];

foreach ($array as $item) {
    if (!in_array($item,$semDuplicatas)){
        $semDuplicatas[] = $item;
    }

}

print_r($array);
print_r($semDuplicatas);