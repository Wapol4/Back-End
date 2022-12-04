<?php 
    // function sum(int $first, int $second){
    //     $total = $first + $second;
    //     return $total;
    // }
    
    // $result = sum(10,10);
    // var_dump($result);

    // 2
    function getFinalValue(int $value){
        if($value >= 80){
            return "A";
        } else if($value >=70 && $value <= 80){
            return "B";
        }
    }

    $score =  getFinalValue(73);
    var_dump($score);

    // 3 Return Type Declarations 
    function sum(int $first, int $second): int
    {
        $total = $first + $second;
        return $total;
    }
    
    $result = sum(10,10);
    var_dump($result);
?>