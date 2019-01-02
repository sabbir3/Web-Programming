<?php

$input_array=array('a','b','c','d');
print_r(array_chunk($input_array,2));
echo "<br/>";
print_r(array_chunk($input_array,2,true));

?>