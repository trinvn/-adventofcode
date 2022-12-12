<code>$signal_array = explode(PHP_EOL, $string);

$sum = 0;
$signal_value = 1;
$cycles = [];
$cycles_array = [20, 60, 100, 140, 180, 220];

foreach ($signal_array as $row) {
    $signal_group = explode(' ', $row);
    $signal = $signal_group[0];

    if ($signal === 'noop') {
        $cycles[] = $signal_value;
    } else {
        $cycles[] = $signal_value;
        $cycles[] = $signal_value;
        $signal_value += $signal_group[1];
    }
}

foreach ($cycles as $key => $value) {
    if (in_array($key, $cycles_array)) {
        echo 'Chu ky ' . $key . ' voi gia tri ' . $value;
    }
}</code>