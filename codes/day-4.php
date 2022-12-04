<code>$group_array = explode(PHP_EOL, $string);

function get_array($string) {
    $result = [];
    $array = explode('-', $string);
    for($i = $array[0]; $i <= $array[1]; $i++) {
        $result[] = $i;
    }

    return $result;
}

$sum = 0;
$sum_2 = 0;
foreach( $group_array as $row ) {
    $array = explode(',', $row);
    $pairs_1 = get_array($array[0]);
    $pairs_2 = get_array($array[1]);

    if ( !array_diff($pairs_1, $pairs_2) || !array_diff($pairs_2, $pairs_1) ) {
        ++$sum;
    }

    if ( array_intersect($pairs_1, $pairs_2) ) {
        ++$sum_2;
    }
}

echo 'Sum part 1: ' . $sum;
echo 'Sum part 2: ' . $sum_2;</code>