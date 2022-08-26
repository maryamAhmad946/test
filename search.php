<?php

if (isset($argc)) {

    $file = $argv[1];
    $index = $argv[2];
    if ($argv[2] == 0) {
        echo "lesser index not found";
        exit;
    } else {
        $index = $argv[2] - 1;
    }
    //echo $index;
    //exit;
    if (($open = fopen($argv[1], "r")) !== FALSE) {

        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $array[] = $data;
        }

        fclose($open);
    }

    $total_records = count($array);

    if ($index >= $total_records) {
        echo "greater index not found";
    } else {
        echo $array[$index][0] . ","; // id
        echo $array[$index][1] . ","; // first name
        echo $array[$index][2] . ","; // last name
        echo $array[$index][3]; // dob
    }
} else {
    echo "argc and argv disabled\n";
}
