<code>$group = str_split($string);

function get_signal($array, $distinct_characters) {
    $array_temp = [];
    foreach ($array as $key => $row) {
        if ( count($array_temp) >= $distinct_characters ) {
            array_shift($array_temp);
        }
    
        array_push($array_temp, $row);
    
        if(count(array_unique($array_temp)) == $distinct_characters ) {
            return ++$key;
        }
    }
}

echo 'Part 1: ' . get_signal($group, 4);
echo 'Part 2: ' . get_signal($group, 14);</code>