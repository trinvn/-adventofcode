<code>$numbers_array = explode(PHP_EOL, $string);

$forest = [];
foreach ($numbers_array as $row => $group) {
    $numbers = str_split($group);

    foreach ($numbers as $col => $number) {
        $forest[$row][$col] = $number;
    }
}

//Part 1
function check_view($forest, $tree, $row, $col, $max_row, $max_col)
{
    $check_top = true;
    $check_right = true;
    $check_bottom = true;
    $check_left = true;

    $point_top = 0;
    $point_right = 0;
    $point_bottom = 0;
    $point_left = 0;

    //Check top
    for ($i = $row - 1; $i >= 0; $i--) {
        ++$point_top;
        if ($tree <= $forest[$i][$col]) {
            $check_top = false;
            break;
        }
    }

    //Check right
    for ($i = $col + 1; $i <= $max_col; $i++) {
        ++$point_right;
        if ($tree <= $forest[$row][$i]) {
            $check_right = false;
            break;
        }
    }

    //Check bottom
    for ($i = $row + 1; $i <= $max_row; $i++) {
        ++$point_bottom;
        if ($tree <= $forest[$i][$col]) {
            $check_bottom = false;
            break;
        }
    }

    //Check left
    for ($i = $col - 1; $i >= 0; $i--) {
        ++$point_left;
        if ($tree <= $forest[$row][$i]) {
            $check_left = false;
            break;
        }
    }


    $point_total = $point_top * $point_right * $point_bottom * $point_left;

    if ($check_top || $check_right || $check_bottom || $check_left) {
        return ['status' => true, 'point' => $point_total];
    } else {
        return ['status' => false];
    }
}

$sum = (count($forest) + count($forest[0]) - 2) * 2;
$max_row = count($forest) - 1;
$max_col = count($forest[0]) - 1;
$trees_valid = [];
$trees_point = [];
foreach ($forest as $row => $tree_row) {
    foreach ($tree_row as $col => $tree) {
        if ($row > 0 && $col > 0 && $row < $max_row && $col < $max_col) {
            if (check_view($forest, $tree, $row, $col, $max_row, $max_col)['status']) {
                ++$sum;
                $trees_valid[] = [
                    'name' => $tree,
                    'status' => check_view($forest, $tree, $row, $col, $max_row, $max_col)['status'],
                    'position' => '[' . $row . ':' . $col . ']',
                    'point' => check_view($forest, $tree, $row, $col, $max_row, $max_col)['point']
                ];

                $trees_point[] = check_view($forest, $tree, $row, $col, $max_row, $max_col)['point'];
            }
        }
    }
}

echo $sum;

//Part 2
rsort($trees_point);
echo $trees_point[0];</code>