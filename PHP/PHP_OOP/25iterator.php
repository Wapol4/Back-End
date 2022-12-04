<?php 

    function getGanjil(int $max): Iterator
    {
        $array = [];

        for($i = 0; $i <= $max; $i++){
            if($i % 2 == 1){
                $array[] = $i;
            }
        }
        return new ArrayIterator($array);
    }

    foreach (getGanjil(100) as $values){
        echo "Ganjil : $values" . PHP_EOL;
    }

    function getGenap(int $max): Iterator
    {
        $array = [];

        for($i = 0; $i <= $max; $i++){
            if($i % 2 == 0){
                yield $i;
            }
        }
    }

    foreach (getGenap(100) as $values){
        echo "Genap : $values" . PHP_EOL;
    }

?>