<?php 
   
   
   // Lokasi Function
    //function sayHello($first_name, $last_name){ // normal arg
    // function sayHello($name = "Anonymous"){ //default arg    
    //     echo "Hello bro $name" . PHP_EOL;
    // }        
    
    // echo sayHello("Eko","Kurniawan");
    // echo SayHello();

        // VARIABLE LENGTH ARGUMENT LIST
        function sumAll(...$values){
            $total = 0;
            foreach ($values as $value){
                $total += $value;
            }
            
            echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
        }
        $values = [1,2,3,4,5];

        sumAll(1, 2, 3, 4, 5);
        sumAll(...$values);


?>