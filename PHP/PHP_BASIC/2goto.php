<?php 
    goto a;
    
    a:
    echo "Hello B". PHP_EOL;

    $counter = 1;

    while(true){
        echo "While Loop ke-$counter".PHP_EOL;
        $counter++;

        if($counter > 10){
            goto end;
        }
    }

    end:
    echo "End Loop";
?>