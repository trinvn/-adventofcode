<?php @include('templates/header.php');

@include('codes/day-10.php');

$string = 'addx 1
noop
addx 2
addx 5
addx 3
noop
addx -1
addx 5
noop
noop
addx 5
noop
addx 3
noop
addx 6
addx -4
noop
noop
addx 5
noop
addx -32
addx 35
addx 5
addx -31
addx 7
addx -13
addx 2
addx 2
addx 5
addx 6
addx -5
addx 2
addx 5
addx 2
addx 2
addx -17
addx 18
addx 5
addx 2
addx -30
addx 31
addx 2
addx 2
addx -32
addx -1
addx 10
addx -8
noop
noop
addx 6
addx 16
noop
addx -11
addx 3
addx -2
addx 3
noop
addx 6
noop
addx -2
noop
addx 7
addx 3
addx -2
addx 4
addx -20
noop
addx -14
addx -2
addx 6
addx 2
addx 3
noop
addx 2
addx -1
addx 4
noop
addx 5
noop
addx 2
addx 3
addx -2
addx 3
noop
addx 4
noop
addx 5
noop
addx 2
addx -24
addx -15
addx 17
addx -10
addx 2
addx -5
addx 6
noop
addx 3
addx 2
addx 2
noop
addx 3
addx 2
addx 5
addx -2
addx 3
addx 2
addx 2
addx 5
addx 2
addx -18
addx -19
noop
addx 1
addx 2
addx 5
addx 3
noop
noop
noop
noop
addx 2
addx 5
addx 2
addx 3
noop
addx -8
addx 11
noop
noop
addx 2
addx 5
addx 2
addx 3
noop
addx -34
noop';

$signal_array = explode(PHP_EOL, $string);

$sum = 0;
$signal_value = 1;
$cycles = [0];
$cycles_array = [20, 60, 100, 140, 180, 220];
$sprites_position = [];

foreach ($signal_array as $row) {
    $signal_group = explode(' ', $row);
    $signal = $signal_group[0];

    if ($signal === 'noop') {
        $cycles[] = $signal_value;
    } else {
        $cycles[] = $signal_value;
        $cycles[] = $signal_value;
        $signal_value += $signal_group[1];
        echo 'Chu ky ' . count($cycles) . ' gia tri ' . $signal_value . '<br>';
    }
}

foreach($cycles_array as $item) {
    $sum += $item * $cycles[$item];
}

echo 'Part 1: ' . $sum;

for($i = 1; $i <= 40; $i++) {
    echo '. ';
}

@include('templates/footer.php');
