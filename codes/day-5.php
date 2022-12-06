<code>$group_steps = explode(PHP_EOL, $string);

$stacks_1 = $stacks;
foreach ($group_steps as $row) {
    $step = explode(' ', $row);
    $count = $step[1];
    $from = $step[3] - 1;
    $to = $step[5] - 1;

    for ($i = 1; $i <= $count; $i++) {
        $temp = end($stacks_1[$from]);
        array_push($stacks_1[$to], $temp);
        array_pop($stacks_1[$from]);
    }
}

echo 'End Stack (part 1): ' . end($stacks_1[0]) . end($stacks_1[1]) . end($stacks_1[2]) . end($stacks_1[3]) . end($stacks_1[4]) . end($stacks_1[5]) . end($stacks_1[6]) . end($stacks_1[7]) . end($stacks_1[8]);

//Part 2;
$stacks_2 = $stacks;
foreach ($group_steps as $row) {
    $step = explode(' ', $row);
    $count = $step[1];
    $from = $step[3] - 1;
    $to = $step[5] - 1;

    $array_temp = [];
    for ($i = 1; $i <= $count; $i++) {
        $temp = end($stacks_2[$from]);
        array_push($array_temp, $temp);
        array_pop($stacks_2[$from]);
    }

    $array_reverse = array_reverse($array_temp, true);

    foreach ($array_reverse as $value) {
        array_push($stacks_2[$to], $value);
        array_pop($array_temp);
    }
}

echo 'End Stack (part 2): ' . end($stacks_2[0]) . end($stacks_2[1]) . end($stacks_2[2]) . end($stacks_2[3]) . end($stacks_2[4]) . end($stacks_2[5]) . end($stacks_2[6]) . end($stacks_2[7]) . end($stacks_2[8]);</code>