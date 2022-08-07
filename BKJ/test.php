<?php 
    echo "hello world";
    $nums = [1,2,3];
    $first = reset($nums);
    echo $first;
    print_r($nums);
    $phone_numbers = [
        "Alex" => "415-235-8573",
        "Jessica" => "415-492-4856",
    ];
    print_r($phone_numbers);
    echo $phone_numbers["Alex"];
    echo "\n";
    $bool = array_key_exists("Bob", $phone_numbers);
    echo null;
    $odd_numbers = [1,3,5,7,9];
    for ($i = 0; $i < count($odd_numbers); $i++) {
        $odd_number = $odd_numbers[$i];
        echo $odd_number . "\n";
    }
?>