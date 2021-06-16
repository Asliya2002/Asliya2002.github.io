<?php
$random_number = rand(0,50);
$numbers = array();
for ($i=0; $i<50; $i++){
    $numbers[$i] = rand(0,50);
}
print_r($numbers);
$some_elem = array_rand($numbers);
echo $some_elem;