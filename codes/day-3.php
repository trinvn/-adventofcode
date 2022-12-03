<code>//Part 1
$group_array = explode(PHP_EOL, $string);

function check_priority($char) {
    foreach (range('a', 'z') as $key => $letter) {
        if($char == $letter) {
            return $key + 1;
        }
    }

    foreach (range('A', 'Z') as $key => $letter) {
        if($char == $letter) {
            return $key + 27;
        }
    }
}

$sum = 0;
foreach ($group_array as $row) {
    $middle = floor(strlen($row) / 2);
    $half_1 = substr($row, 0, $middle);
    $half_2 = substr($row, $middle);

    $array_1 = str_split($half_1);
    $array_2 = str_split($half_2);

    $char = array_merge(array_intersect($array_1, $array_2));
    $sum = $sum + check_priority($char[0]);
}

echo 'Sum 1: ' . $sum;

//Part 2
$sum = 0;
$group_array_new = array_chunk($group_array, 3);
foreach ($group_array_new as $row) {
    $rucksacks_1 = $row[0] ? str_split($row[0]) : array();
    $rucksacks_2 = $row[1] ? str_split($row[1]) : array();
    $rucksacks_3 = $row[2] ? str_split($row[2]) : array();
    $char = array_merge(array_intersect($rucksacks_1, $rucksacks_2, $rucksacks_3));

    $char = array_merge(array_intersect($rucksacks_1, $rucksacks_2, $rucksacks_3));
    $sum = $sum + check_priority($char[0]);
}
echo 'Sum 2: ' . $sum;</code>