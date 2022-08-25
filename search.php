<?php

if (isset($argc)) {
    if (($open = fopen($argv[1], "r")) !== FALSE) {

        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
            $array[] = $data;
        }

        fclose($open);
    }
    print_r($array[$argv[2]]);
} else {
    
    echo "argc and argv disabled\n";
}
