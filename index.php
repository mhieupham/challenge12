<?php
function getArray($array){
    for($i=0;$i<count($array)-2;$i++){
        if(
            $array[$i] + $array[$i+1] == $array[$i+2] or
            $array[$i+1] + $array[$i+2] == $array[$i] or
            $array[$i] + $array[$i+2] == $array[$i+1] or
            $array[$i+1] + $array[$i] == $array[$i+2] or
            $array[$i+2] + $array[$i+1] == $array[$i] or
            $array[$i+2] + $array[$i] == $array[$i+1]
        ){
            echo'<pre>';
            var_dump($array[$i]."+".$array[$i+1]."=".$array[$i+2]);
        }
    }
}
$array = [2, 5, 3, 1, 9, 2, 11, 2, 2, 4, 3];
getArray($array);
