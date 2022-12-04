<?php 
    // Function memanngil functionnya sendiri
    function factorialloop(int $value): int{
        $total = 1;

        for ($i = 1; $i <= $value; $i++){
            $total *= 1;
        }

        return $total;
    }

    var_dump(factorialloop(6));
    var_dump(1 * 2 * 3 * 4 * 5);

    function factorialRec(int $value): int{
        if($value == 1){
            return 1;
        }else {
            return $value * factorialRec($value -  1);
        }
    }

    var_dump(factorialRec(4));
?>