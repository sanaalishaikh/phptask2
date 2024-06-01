<?php


$months = ['Jan', 'Feb' , 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept'];

// for searching the value of index
foreach ($months as $month){
    if($month == 'Mar'){
        $idx = array_search($month, $months);
        echo $idx;
       unset($months[$idx]);
    }
}

// to display the modified array
var_dump($months);

?>