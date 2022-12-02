<code>$group_array = explode(PHP_EOL.PHP_EOL, $string);
$sum = [];
foreach($group_array as $row) {
    $sum[] = array_sum(explode(PHP_EOL, $row));
}

echo 'Max: ' . max($sum);

rsort($sum);
$sum_top_3 = $sum[0] + $sum[1] + $sum[2];
echo 'Sum top 3: ' . $sum_top_3;
</code>