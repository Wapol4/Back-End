<?php 
    // For each pada array
    $names = ["Eko", "Kurniawan", "Kannedi"];

    foreach($names as $name){
        echo "Hello $name ". PHP_EOL;
    }
    
    // For each denagn key
    $person = [
        "first_name" => "Eko",
        "last_name" => "Kurniawan"
    ];

    foreach ($person as $key => $value){
        echo "$key : $value" . PHP_EOL;
    }
?>