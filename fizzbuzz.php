<?php
for($i = 1; $i <= 100; $i++){ 
    if($i % 3 == 0 && $i % 5 == 0){
        echo $i."\t FizzBuzz \n";
    }else if ($i % 3 == 0){
        echo $i ."\t Fizz \n";
    }else if ($i % 5 == 0){
        echo $i ."\t Buzz \n";
    }else{
        echo $i ."\t tidak habis di bagi 3 maupun 5 \n";
    }
}
?>