<code>//Part 1
$search = array('A', 'B', 'C', 'X', 'Y', 'Z');
$replace = array(1, 2, 3, 1, 2, 3);
$string_1 = str_replace($search, $replace, $string);

$group_array = explode(PHP_EOL, $string_1);

$sum = 0;
foreach($group_array as $row) {
    $number = explode(' ', $row);
    $sum = $sum + $number[1];

    if ( $number[1] == 3 && $number[0] == 1 ) {
        $sum = $sum + 0;
    }
    else if ( $number[1] == 1 && $number[0] == 3 ) {
        $sum = $sum + 6;
    }
    else if ( $number[1] > $number[0] ) {
        $sum = $sum + 6;
    }
    else if ( $number[1] == $number[0] ) {
        $sum = $sum + 3;
    }
}

echo 'Sum part 1: ' . $sum;


//Part 2
$search = array('A', 'B', 'C');
$replace = array(1, 2, 3);
$string_2 = str_replace($search, $replace, $string);
$group_array_2 = explode(PHP_EOL, $string_2);

$sum = 0;
foreach($group_array_2 as $row) {
    $number = explode(' ', $row);
    if ($number[1] == 'X') {
        switch ($number[0]) {
            case 1:
                $sum = $sum + 3;
                break;
            case 2:
                $sum = $sum + 1;
                break;
            case 3:
                $sum = $sum + 2;
                break;
        }
    }
    else if ($number[1] == 'Y') {
        switch ($number[0]) {
            case 1:
                $sum = $sum + 4;
                break;
            case 2:
                $sum = $sum + 5;
                break;
            case 3:
                $sum = $sum + 6;
                break;
        }
    }
    else if ($number[1] == 'Z') {
        switch ($number[0]) {
            case 1:
                $sum = $sum + 8;
                break;
            case 2:
                $sum = $sum + 9;
                break;
            case 3:
                $sum = $sum + 7;
                break;
        }
    }
}
echo 'Sum part 2: ' . $sum;</code>