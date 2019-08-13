<?php

//There are 15 possible options(3*5) and it will repeat for multiples of 15
$output_values = ["","","Linio","","IT","Linio","","","Linio","IT","","Linio","","","Linianos"];

for($i=0;$i<100;$i++){
    
    $print_value = $i+1;
    $reminder = (($i) % 15); 
    if(isset($output_values[$reminder]) && $output_values[$reminder] != ""){
        $print_value = $output_values[$reminder];
    }
    
    echo $print_value."<br/>";
    
}

?>