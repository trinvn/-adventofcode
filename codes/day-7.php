<code>$commands = explode(PHP_EOL, $string);

function array_multisum(array $arr, $search_key = ''): float
{
    $sum = array_sum($arr);
    foreach ($arr as $key => $child) {
        if ($search_key && strpos($key, $search_key) !== false) {
            $sum += is_array($child) ? array_multisum($child, $search_key) : 0;
        }
    }
    return $sum;
}

$sum = 0;
$sum_total = 0;

$dir = '/';
$dir_array = [];
$dir_sum_array = [];
$new_ls = false;
foreach ($commands as $row) {
    $split_command = explode(' ', $row);
    if ($split_command[0] === '$' && $split_command[1] === 'cd' && $split_command[2] != '/' && $split_command[2] != '..') {
        $dir .= '-' . $split_command[2];
        $dir_array[$dir][] = 0;
    } else if ($split_command[0] === '$' && $split_command[1] === 'cd' && $split_command[2] === '..') {
        $split_dir = explode('-', $dir);
        $dir_back = strlen(end($split_dir)) + 1;
        $dir = substr($dir, 0, -$dir_back);
    } else if (is_numeric($split_command[0])) {
        $dir_array[$dir][0] += $split_command[0];
    }
}

foreach ($dir_array as $key => $row) {
    $dir_sum_array[$key] = array_multisum($dir_array, $key);
    if ( $dir_sum_array[$key] <= 100000 ) {
        $sum = $sum + $dir_sum_array[$key];
    }
}

echo 'Part 1: ' . $sum;

//Part 2
$total = 70000000;
$size_need = 30000000;
$used = $dir_sum_array['/'];
$unused = $total - $dir_sum_array['/'];
$need = $size_need - $unused;

echo 'Total: ' . number_format($total);
echo 'Size need: ' . number_format($size_need);
echo 'Used: ' . number_format($used);
echo 'Unused: ' . number_format($unused);
echo 'Need: ' . number_format($need);


$size_remove = 0;
sort($dir_sum_array);
foreach($dir_sum_array as $key => $value) {
    if ( $need < $value ) {
        $size_remove = $dir_sum_array[$key];
        break;
    }
}

echo 'Part 2: ' . $size_remove;</code>