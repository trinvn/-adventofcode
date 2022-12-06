<?php @include('templates/header.php');

@include('codes/day-5.php');

$stacks = [
    ['S', 'T', 'H', 'F', 'W', 'R'],
    ['S', 'G', 'D', 'Q', 'W'],
    ['B', 'T', 'W'],
    ['D', 'R', 'W', 'T', 'N', 'Q', 'Z', 'J'],
    ['F', 'B', 'H', 'G', 'L', 'V', 'T', 'Z'],
    ['L', 'P', 'T', 'C', 'V', 'B', 'S', 'G'],
    ['Z', 'B', 'R', 'T', 'W', 'G', 'P'],
    ['N', 'G', 'M', 'T', 'C', 'J', 'R'],
    ['L', 'G', 'B', 'W']
];

$string = 'move 4 from 2 to 1
move 1 from 6 to 9
move 6 from 4 to 7
move 1 from 2 to 5
move 3 from 6 to 3
move 4 from 3 to 9
move 2 from 1 to 3
move 6 from 7 to 5
move 5 from 7 to 6
move 6 from 8 to 7
move 6 from 7 to 6
move 1 from 8 to 3
move 15 from 6 to 4
move 7 from 5 to 6
move 1 from 7 to 2
move 2 from 5 to 3
move 5 from 9 to 8
move 5 from 5 to 6
move 1 from 7 to 4
move 5 from 6 to 5
move 3 from 3 to 8
move 4 from 5 to 8
move 1 from 2 to 8
move 7 from 1 to 2
move 2 from 6 to 2
move 2 from 5 to 8
move 1 from 1 to 8
move 8 from 2 to 6
move 3 from 3 to 4
move 4 from 9 to 3
move 5 from 3 to 6
move 5 from 6 to 8
move 3 from 4 to 8
move 13 from 6 to 5
move 14 from 4 to 8
move 1 from 2 to 6
move 1 from 4 to 2
move 12 from 5 to 4
move 30 from 8 to 6
move 1 from 8 to 9
move 1 from 9 to 4
move 15 from 4 to 5
move 1 from 2 to 9
move 1 from 4 to 2
move 1 from 2 to 1
move 1 from 9 to 3
move 8 from 5 to 7
move 2 from 5 to 6
move 7 from 8 to 1
move 1 from 3 to 4
move 1 from 7 to 3
move 1 from 4 to 6
move 26 from 6 to 7
move 1 from 3 to 7
move 3 from 7 to 2
move 1 from 1 to 9
move 16 from 7 to 5
move 2 from 7 to 4
move 12 from 7 to 6
move 1 from 1 to 9
move 4 from 6 to 1
move 7 from 1 to 5
move 2 from 1 to 8
move 1 from 7 to 2
move 1 from 1 to 4
move 2 from 4 to 5
move 1 from 9 to 4
move 3 from 6 to 9
move 8 from 6 to 5
move 5 from 5 to 9
move 19 from 5 to 8
move 1 from 9 to 8
move 3 from 8 to 7
move 1 from 7 to 3
move 8 from 5 to 2
move 2 from 4 to 2
move 4 from 9 to 8
move 1 from 2 to 3
move 2 from 3 to 2
move 4 from 9 to 5
move 8 from 8 to 4
move 9 from 8 to 5
move 5 from 8 to 4
move 5 from 5 to 7
move 12 from 2 to 3
move 2 from 2 to 8
move 1 from 8 to 6
move 1 from 8 to 7
move 10 from 4 to 3
move 1 from 2 to 9
move 13 from 5 to 3
move 1 from 7 to 5
move 27 from 3 to 4
move 1 from 8 to 7
move 3 from 5 to 2
move 6 from 6 to 3
move 2 from 4 to 1
move 27 from 4 to 2
move 2 from 7 to 8
move 23 from 2 to 4
move 2 from 1 to 4
move 2 from 7 to 2
move 4 from 2 to 9
move 10 from 3 to 4
move 1 from 3 to 5
move 1 from 5 to 1
move 5 from 2 to 5
move 30 from 4 to 2
move 1 from 8 to 9
move 1 from 8 to 1
move 27 from 2 to 3
move 2 from 4 to 2
move 1 from 9 to 4
move 2 from 1 to 3
move 8 from 3 to 7
move 19 from 3 to 1
move 1 from 4 to 7
move 5 from 9 to 1
move 4 from 2 to 9
move 4 from 3 to 4
move 1 from 3 to 5
move 1 from 2 to 7
move 1 from 9 to 3
move 1 from 9 to 1
move 5 from 5 to 4
move 5 from 7 to 3
move 1 from 5 to 6
move 23 from 1 to 6
move 1 from 9 to 2
move 1 from 2 to 5
move 24 from 6 to 9
move 6 from 4 to 7
move 4 from 4 to 8
move 1 from 4 to 9
move 4 from 7 to 4
move 4 from 3 to 4
move 4 from 9 to 8
move 6 from 7 to 9
move 4 from 7 to 6
move 1 from 1 to 4
move 2 from 6 to 4
move 1 from 6 to 2
move 1 from 1 to 8
move 1 from 7 to 3
move 1 from 6 to 9
move 13 from 4 to 2
move 3 from 3 to 2
move 15 from 9 to 8
move 1 from 5 to 9
move 5 from 9 to 1
move 4 from 1 to 7
move 4 from 7 to 3
move 8 from 2 to 7
move 9 from 8 to 2
move 1 from 1 to 2
move 7 from 9 to 2
move 4 from 3 to 1
move 4 from 1 to 4
move 2 from 9 to 1
move 20 from 2 to 8
move 3 from 4 to 8
move 1 from 2 to 3
move 4 from 2 to 7
move 1 from 3 to 4
move 1 from 9 to 3
move 1 from 4 to 7
move 1 from 2 to 5
move 1 from 4 to 3
move 2 from 1 to 6
move 1 from 5 to 6
move 1 from 7 to 1
move 12 from 7 to 2
move 12 from 2 to 6
move 9 from 6 to 2
move 1 from 6 to 8
move 1 from 3 to 9
move 8 from 2 to 4
move 1 from 9 to 6
move 1 from 4 to 6
move 4 from 4 to 9
move 1 from 4 to 9
move 1 from 1 to 5
move 2 from 6 to 3
move 1 from 5 to 4
move 1 from 2 to 8
move 10 from 8 to 6
move 10 from 8 to 3
move 1 from 3 to 4
move 8 from 8 to 1
move 3 from 9 to 8
move 2 from 9 to 1
move 11 from 6 to 7
move 1 from 1 to 7
move 8 from 1 to 4
move 3 from 6 to 7
move 1 from 1 to 4
move 14 from 8 to 6
move 1 from 8 to 7
move 1 from 6 to 8
move 6 from 4 to 1
move 1 from 8 to 5
move 4 from 1 to 8
move 2 from 7 to 1
move 1 from 6 to 7
move 5 from 4 to 2
move 2 from 4 to 3
move 4 from 2 to 8
move 15 from 7 to 3
move 3 from 3 to 6
move 1 from 5 to 2
move 21 from 3 to 6
move 2 from 8 to 7
move 1 from 7 to 8
move 32 from 6 to 9
move 1 from 7 to 8
move 5 from 8 to 4
move 2 from 8 to 7
move 14 from 9 to 8
move 14 from 8 to 1
move 2 from 6 to 1
move 2 from 7 to 4
move 1 from 9 to 3
move 17 from 9 to 5
move 6 from 1 to 8
move 4 from 4 to 6
move 2 from 2 to 5
move 2 from 8 to 2
move 1 from 6 to 7
move 2 from 2 to 6
move 4 from 3 to 2
move 7 from 6 to 3
move 6 from 5 to 7
move 1 from 8 to 9
move 1 from 6 to 7
move 4 from 8 to 6
move 1 from 9 to 3
move 4 from 1 to 4
move 12 from 5 to 9
move 7 from 7 to 8
move 3 from 4 to 2
move 8 from 9 to 4
move 2 from 6 to 2
move 1 from 7 to 4
move 2 from 6 to 9
move 1 from 5 to 3
move 1 from 8 to 1
move 2 from 8 to 7
move 2 from 2 to 9
move 7 from 2 to 3
move 8 from 4 to 1
move 2 from 8 to 4
move 4 from 9 to 7
move 2 from 9 to 5
move 16 from 1 to 3
move 3 from 7 to 4
move 1 from 7 to 6
move 1 from 6 to 2
move 2 from 5 to 3
move 10 from 4 to 2
move 2 from 8 to 7
move 19 from 3 to 8
move 17 from 3 to 9
move 3 from 1 to 7
move 17 from 9 to 2
move 1 from 7 to 5
move 1 from 7 to 5
move 2 from 5 to 7
move 2 from 9 to 2
move 6 from 7 to 6
move 3 from 6 to 7
move 1 from 8 to 9
move 1 from 9 to 3
move 4 from 2 to 5
move 17 from 2 to 3
move 3 from 7 to 5
move 1 from 5 to 3
move 7 from 2 to 3
move 2 from 2 to 4
move 1 from 7 to 1
move 1 from 1 to 5
move 2 from 5 to 3
move 1 from 4 to 5
move 1 from 4 to 3
move 14 from 3 to 5
move 17 from 8 to 7
move 2 from 6 to 2
move 12 from 3 to 5
move 15 from 5 to 9
move 7 from 7 to 3
move 7 from 7 to 6
move 1 from 2 to 3
move 11 from 9 to 6
move 13 from 5 to 7
move 10 from 6 to 8
move 6 from 8 to 3
move 2 from 5 to 8
move 1 from 2 to 9
move 10 from 7 to 6
move 9 from 6 to 8
move 1 from 5 to 1
move 10 from 6 to 4
move 8 from 4 to 5
move 1 from 1 to 2
move 3 from 9 to 1
move 10 from 3 to 7
move 1 from 4 to 7
move 12 from 7 to 9
move 7 from 3 to 5
move 13 from 8 to 7
move 3 from 9 to 5
move 5 from 5 to 6
move 3 from 1 to 9
move 5 from 9 to 6
move 10 from 6 to 4
move 15 from 7 to 5
move 3 from 9 to 4
move 1 from 4 to 3
move 3 from 8 to 9
move 6 from 9 to 6
move 2 from 5 to 1
move 1 from 2 to 7
move 12 from 5 to 8
move 3 from 9 to 5
move 11 from 5 to 6
move 1 from 1 to 2
move 1 from 2 to 8
move 3 from 7 to 8
move 10 from 8 to 3
move 1 from 1 to 7
move 10 from 4 to 9
move 1 from 7 to 8
move 5 from 5 to 3
move 15 from 6 to 5
move 8 from 3 to 9
move 3 from 4 to 5
move 1 from 7 to 8
move 8 from 8 to 9
move 1 from 6 to 5
move 5 from 3 to 2
move 5 from 2 to 3
move 5 from 9 to 8
move 1 from 6 to 8
move 2 from 5 to 1
move 4 from 3 to 2
move 16 from 5 to 6
move 3 from 5 to 9
move 4 from 8 to 5
move 8 from 6 to 4
move 4 from 2 to 3
move 1 from 1 to 4
move 6 from 3 to 6
move 24 from 9 to 2
move 1 from 1 to 9
move 1 from 9 to 4
move 2 from 4 to 5
move 1 from 3 to 2
move 10 from 6 to 8
move 22 from 2 to 6
move 1 from 2 to 7
move 1 from 7 to 5
move 10 from 8 to 9
move 7 from 9 to 3
move 6 from 4 to 8
move 3 from 9 to 2
move 5 from 8 to 3
move 1 from 4 to 1
move 1 from 8 to 3
move 3 from 6 to 2
move 5 from 5 to 1
move 1 from 5 to 3
move 5 from 6 to 3
move 1 from 2 to 7
move 16 from 3 to 2
move 1 from 8 to 1
move 1 from 4 to 7
move 1 from 5 to 3
move 6 from 6 to 4
move 14 from 2 to 8
move 3 from 3 to 5
move 2 from 3 to 6
move 3 from 5 to 6
move 4 from 6 to 4
move 3 from 4 to 8
move 7 from 2 to 9
move 2 from 2 to 1
move 9 from 8 to 4
move 7 from 1 to 7
move 8 from 7 to 5
move 2 from 8 to 4
move 3 from 9 to 6
move 4 from 4 to 6
move 1 from 7 to 3
move 4 from 8 to 2
move 2 from 9 to 8
move 9 from 6 to 7
move 1 from 9 to 8
move 1 from 1 to 5
move 3 from 4 to 5
move 1 from 3 to 2
move 5 from 8 to 2
move 9 from 2 to 7
move 1 from 6 to 7
move 1 from 6 to 2
move 9 from 7 to 4
move 2 from 5 to 9
move 10 from 4 to 6
move 1 from 8 to 6
move 5 from 4 to 3
move 5 from 4 to 9
move 5 from 9 to 5
move 1 from 1 to 7
move 4 from 7 to 8
move 8 from 5 to 3
move 3 from 3 to 8
move 6 from 7 to 6
move 3 from 3 to 1
move 5 from 3 to 7
move 1 from 9 to 6
move 2 from 7 to 6
move 1 from 9 to 3
move 4 from 6 to 9
move 2 from 2 to 6
move 1 from 7 to 3
move 6 from 5 to 4
move 7 from 6 to 9
move 6 from 6 to 8
move 2 from 1 to 2
move 1 from 5 to 1
move 5 from 8 to 5
move 1 from 3 to 9
move 4 from 4 to 5
move 10 from 9 to 2
move 14 from 6 to 4
move 1 from 3 to 8
move 1 from 8 to 5
move 2 from 7 to 9
move 1 from 1 to 2
move 14 from 4 to 7
move 1 from 1 to 4
move 3 from 4 to 1
move 3 from 5 to 1
move 6 from 5 to 1
move 10 from 7 to 3
move 6 from 1 to 5
move 6 from 1 to 7
move 3 from 8 to 3
move 1 from 5 to 1
move 3 from 9 to 6
move 1 from 9 to 3
move 6 from 5 to 9
move 2 from 6 to 1
move 9 from 2 to 1
move 6 from 9 to 6
move 2 from 8 to 7
move 5 from 7 to 3
move 7 from 7 to 5
move 4 from 2 to 8
move 6 from 8 to 3
move 1 from 9 to 4
move 1 from 7 to 3
move 2 from 5 to 3
move 7 from 6 to 4
move 28 from 3 to 4
move 1 from 3 to 8
move 1 from 5 to 9
move 9 from 4 to 5
move 12 from 4 to 5
move 2 from 4 to 6
move 5 from 4 to 6
move 1 from 3 to 8
move 10 from 5 to 8
move 10 from 5 to 4
move 5 from 5 to 9
move 3 from 4 to 1
move 5 from 6 to 9
move 2 from 6 to 7
move 2 from 7 to 5
move 10 from 9 to 4
move 1 from 8 to 5
move 5 from 1 to 5
move 8 from 8 to 7
move 8 from 5 to 3
move 8 from 7 to 8
move 2 from 8 to 2
move 7 from 3 to 2
move 21 from 4 to 7
move 10 from 1 to 9
move 3 from 4 to 5
move 1 from 4 to 8
move 1 from 8 to 3
move 7 from 8 to 5
move 2 from 3 to 1
move 7 from 7 to 2
move 1 from 1 to 4
move 1 from 1 to 6
move 8 from 9 to 3
move 2 from 8 to 4
move 3 from 3 to 1
move 3 from 4 to 7
move 1 from 6 to 7
move 5 from 2 to 4
move 2 from 1 to 6'; 

$group_steps = explode(PHP_EOL, $string);

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
echo '<br>';

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

echo 'End Stack (part 2): ' . end($stacks_2[0]) . end($stacks_2[1]) . end($stacks_2[2]) . end($stacks_2[3]) . end($stacks_2[4]) . end($stacks_2[5]) . end($stacks_2[6]) . end($stacks_2[7]) . end($stacks_2[8]);

@include('templates/footer.php');
