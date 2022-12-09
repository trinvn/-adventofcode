<code>$steps_array = explode(PHP_EOL, $string);

$h_steps[] = ['x' => 1, 'y' => 1];
$t_steps_1[] = ['x' => 1, 'y' => 1];
$t_steps_2[] = ['x' => 1, 'y' => 1];
$t_steps_2[] = ['x' => 1, 'y' => 1];
$t_steps_3[] = ['x' => 1, 'y' => 1];
$t_steps_4[] = ['x' => 1, 'y' => 1];
$t_steps_5[] = ['x' => 1, 'y' => 1];
$t_steps_6[] = ['x' => 1, 'y' => 1];
$t_steps_7[] = ['x' => 1, 'y' => 1];
$t_steps_8[] = ['x' => 1, 'y' => 1];
$t_steps_9[] = ['x' => 1, 'y' => 1];
$h_step_current = ['x' => 1, 'y' => 1];
$t_step_current_1 = ['x' => 1, 'y' => 1];
$t_step_current_2 = ['x' => 1, 'y' => 1];
$t_step_current_3 = ['x' => 1, 'y' => 1];
$t_step_current_4 = ['x' => 1, 'y' => 1];
$t_step_current_5 = ['x' => 1, 'y' => 1];
$t_step_current_6 = ['x' => 1, 'y' => 1];
$t_step_current_7 = ['x' => 1, 'y' => 1];
$t_step_current_8 = ['x' => 1, 'y' => 1];
$t_step_current_9 = ['x' => 1, 'y' => 1];
$t_steps_unique_1[] = ['x' => 1, 'y' => 1];
$t_steps_unique_9[] = ['x' => 1, 'y' => 1];

function follow(&$t_steps, &$t_step_current, &$t_steps_unique_1, &$t_steps_unique_9, $h_step_current, $node = 0)
{
    $h_step_current_x = $h_step_current['x'];
    $h_step_current_y = $h_step_current['y'];
    $t_step_current_x = $t_step_current['x'];
    $t_step_current_y = $t_step_current['y'];

    if ($h_step_current_x - $t_step_current_x > 1 || $t_step_current_x - $h_step_current_x > 1) {
        if ($h_step_current_y > $t_step_current_y) {
            $t_step_current['y'] = ++$t_step_current['y'];
        } else if ($h_step_current_y < $t_step_current_y) {
            $t_step_current['y'] = --$t_step_current['y'];
        }

        if ($h_step_current_x > $t_step_current_x) {
            $t_step_current['x'] = ++$t_step_current['x'];
        } else if ($h_step_current_x < $t_step_current_x) {
            $t_step_current['x'] = --$t_step_current['x'];
        }
    } else if ($h_step_current_y - $t_step_current_y > 1 || $t_step_current_y - $h_step_current_y > 1) {
        if ($h_step_current_y > $t_step_current_y) {
            $t_step_current['y'] = ++$t_step_current['y'];
        } else if ($h_step_current_y < $t_step_current_y) {
            $t_step_current['y'] = --$t_step_current['y'];
        }

        if ($h_step_current_x > $t_step_current_x) {
            $t_step_current['x'] = ++$t_step_current['x'];
        } else if ($h_step_current_x < $t_step_current_x) {
            $t_step_current['x'] = --$t_step_current['x'];
        }
    }

    $t_steps[] = ['x' => $t_step_current['x'], 'y' => $t_step_current['y']];

    if ($node == 1) {
        $t_step_1 = ['x' => $t_step_current['x'], 'y' => $t_step_current['y']];
        if (!in_array($t_step_1, $t_steps_unique_1)) {
            $t_steps_unique_1[] = $t_step_1;
        }
    }

    if ($node == 9) {
        $t_step_9 = ['x' => $t_step_current['x'], 'y' => $t_step_current['y']];
        if (!in_array($t_step_9, $t_steps_unique_9)) {
            $t_steps_unique_9[] = $t_step_9;
        }
    }
}

function move(&$h_steps, &$t_steps_1, &$t_steps_2, &$t_steps_3, &$t_steps_4, &$t_steps_5, &$t_steps_6, &$t_steps_7, &$t_steps_8, &$t_steps_9, &$h_step_current, &$t_step_current_1, &$t_step_current_2, &$t_step_current_3, &$t_step_current_4, &$t_step_current_5, &$t_step_current_6, &$t_step_current_7, &$t_step_current_8, &$t_step_current_9, &$t_steps_unique_1, &$t_steps_unique_9, $direction, $step)
{
    switch ($direction) {
        case 'U':
            $y = $h_step_current['y'];
            for ($i = 1; $i <= $step; $i++) {
                $h_step_current['y'] = ++$y;
                $h_steps[] = ['x' => $h_step_current['x'], 'y' => $h_step_current['y']];

                follow($t_steps_1, $t_step_current_1, $t_steps_unique_1, $t_steps_unique_9, $h_step_current);
                follow($t_steps_2, $t_step_current_2, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_1, 1);
                follow($t_steps_3, $t_step_current_3, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_2);
                follow($t_steps_4, $t_step_current_4, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_3);
                follow($t_steps_5, $t_step_current_5, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_4);
                follow($t_steps_6, $t_step_current_6, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_5);
                follow($t_steps_7, $t_step_current_7, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_6);
                follow($t_steps_8, $t_step_current_8, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_7);
                follow($t_steps_9, $t_step_current_9, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_8, 9);
            }
            break;
        case 'R':
            $x = $h_step_current['x'];
            for ($i = 1; $i <= $step; $i++) {
                $h_step_current['x'] = ++$x;
                $h_steps[] = ['x' => $h_step_current['x'], 'y' => $h_step_current['y']];

                follow($t_steps_1, $t_step_current_1, $t_steps_unique_1, $t_steps_unique_9, $h_step_current);
                follow($t_steps_2, $t_step_current_2, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_1, 1);
                follow($t_steps_3, $t_step_current_3, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_2);
                follow($t_steps_4, $t_step_current_4, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_3);
                follow($t_steps_5, $t_step_current_5, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_4);
                follow($t_steps_6, $t_step_current_6, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_5);
                follow($t_steps_7, $t_step_current_7, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_6);
                follow($t_steps_8, $t_step_current_8, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_7);
                follow($t_steps_9, $t_step_current_9, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_8, 9);
            }
            break;
        case 'D':
            $y = $h_step_current['y'];
            for ($i = 1; $i <= $step; $i++) {
                $h_step_current['y'] = --$y;
                $h_steps[] = ['x' => $h_step_current['x'], 'y' => $h_step_current['y']];

                follow($t_steps_1, $t_step_current_1, $t_steps_unique_1, $t_steps_unique_9, $h_step_current);
                follow($t_steps_2, $t_step_current_2, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_1, 1);
                follow($t_steps_3, $t_step_current_3, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_2);
                follow($t_steps_4, $t_step_current_4, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_3);
                follow($t_steps_5, $t_step_current_5, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_4);
                follow($t_steps_6, $t_step_current_6, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_5);
                follow($t_steps_7, $t_step_current_7, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_6);
                follow($t_steps_8, $t_step_current_8, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_7);
                follow($t_steps_9, $t_step_current_9, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_8, 9);
            }
            break;
        case 'L':
            $x = $h_step_current['x'];
            for ($i = 1; $i <= $step; $i++) {
                $h_step_current['x'] = --$x;
                $h_steps[] = ['x' => $h_step_current['x'], 'y' => $h_step_current['y']];

                follow($t_steps_1, $t_step_current_1, $t_steps_unique_1, $t_steps_unique_9, $h_step_current);
                follow($t_steps_2, $t_step_current_2, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_1, 1);
                follow($t_steps_3, $t_step_current_3, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_2);
                follow($t_steps_4, $t_step_current_4, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_3);
                follow($t_steps_5, $t_step_current_5, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_4);
                follow($t_steps_6, $t_step_current_6, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_5);
                follow($t_steps_7, $t_step_current_7, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_6);
                follow($t_steps_8, $t_step_current_8, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_7);
                follow($t_steps_9, $t_step_current_9, $t_steps_unique_1, $t_steps_unique_9, $t_step_current_8, 9);
            }
            break;
    }
}

foreach ($steps_array as $step_group) {
    $step_array = explode(' ', $step_group);
    $direction = $step_array[0];
    $step = $step_array[1];

    move($h_steps, $t_steps_1, $t_steps_2, $t_steps_3, $t_steps_4, $t_steps_5, $t_steps_6, $t_steps_7, $t_steps_8, $t_steps_9, $h_step_current, $t_step_current_1, $t_step_current_2, $t_step_current_3, $t_step_current_4, $t_step_current_5, $t_step_current_6, $t_step_current_7, $t_step_current_8, $t_step_current_9, $t_steps_unique_1, $t_steps_unique_9, $direction, $step);
}

echo 'Part 1: ' . count($t_steps_unique_1);

echo 'Part 2: ' . count($t_steps_unique_9);</code>