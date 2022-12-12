<?php @include('templates/header.php');

@include('codes/day-11.php');

$string = 'Monkey 0:
Starting items: 79, 98
Operation: new = old * 19
Test: divisible by 23
  If true: throw to monkey 2
  If false: throw to monkey 3

Monkey 1:
Starting items: 54, 65, 75, 74
Operation: new = old + 6
Test: divisible by 19
  If true: throw to monkey 2
  If false: throw to monkey 0

Monkey 2:
Starting items: 79, 60, 97
Operation: new = old * old
Test: divisible by 13
  If true: throw to monkey 1
  If false: throw to monkey 3

Monkey 3:
Starting items: 74
Operation: new = old + 3
Test: divisible by 17
  If true: throw to monkey 0
  If false: throw to monkey 1';

$round_array = explode(PHP_EOL . PHP_EOL, $string);

$monkeys = [];

//Add value
foreach ($round_array as $key => $round) {
    $row = explode(PHP_EOL, $round);

    $monkey_name = explode('Monkey ', $row[0]);
    $monkey_name = substr($monkey_name[1], 0, -1);

    $operation = explode('new = ', $row[2]);
    $operation = explode(' ', $operation[1]);
    $calculation = $operation[1];

    $divisible = explode('divisible by ', $row[3]);
    $divisible = $divisible[1];

    $monkey_true = explode('throw to monkey ', $row[4]);
    $monkey_true = $monkey_true[1];

    $monkey_false = explode('throw to monkey ', $row[5]);
    $monkey_false = $monkey_false[1];

    $starting_row = explode(': ', $row[1]);
    $starting_items = explode(', ', $starting_row[1]);

    foreach ($starting_items as $item) {
        $monkeys[$key]['value'][] = $item;
        $monkeys[$key]['calculation'] = $calculation;
        $monkeys[$key]['divisible'] = $divisible;
        $monkeys[$key]['monkey_true'] = $monkey_true;
        $monkeys[$key]['monkey_false'] = $monkey_false;
        $monkeys[$key]['operation'] = $operation;
    }
}

foreach($monkeys as $key => $monkey) {
    foreach($monkey['value'] as $item) {
        echo $item . '<br>';
        $unit_1 = is_numeric($monkeys[$key]['operation'][0]) ? $monkeys[$key]['operation'][0] : $item;
        $unit_2 = is_numeric($monkeys[$key]['operation'][2]) ? $monkeys[$key]['operation'][2] : $item;
        $worry = 0;

        switch($monkeys[$key]['calculation']){
            case '+':
                $worry = $unit_1 +  $unit_2;
                break;
            case '-':
                $worry = $unit_1 -  $unit_2;
                break;
            case '*':
                $worry = $unit_1 *  $unit_2;
                break;
            case '/':
                $worry = $unit_1 /  $unit_2;
                break;
        }

        $worry_level = floor($worry / 3);

        if ( $worry_level % $monkeys[$key]['divisible'] == 0 ) {
            $monkey_to = $monkeys[$key]['monkey_true'];
        }
        else {
            $monkey_to = $monkeys[$key]['monkey_false'];
        }

        echo 'Chuyen tu ' . $key . ' sang ' . $monkey_to . ' gia tri ' . $worry_level . '<br>';

        array_shift($monkeys[$key]['value']);
        $monkeys[$monkey_to]['value'][] = $worry_level;
    }

    echo '--------<br>';
}

echo '<pre>';
var_dump($monkeys);
echo '</pre>';



        /*
        
        
        echo 'Monkey inspects an item with a worry level of ' . $item . '<br>';
        echo 'Worry level is multiplied by '. $worry . ' <br>';
        echo 'Monkey gets bored with item. Worry level is divided by 3 to '. $worry_level .'.<br>';

        if ( $worry_level % $divisible == 0 ) {
            $monkey_to = $monkey_true;
        }
        else {
            $monkey_to = $monkey_false;
        }

        echo 'Item with worry level '. $worry_level .' is thrown to monkey '. $monkey_to .'.<br>';
        */



@include('templates/footer.php');
