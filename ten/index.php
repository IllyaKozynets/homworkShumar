<?php
$a=$_POST['text'];
function ten($a)
{
    $result=array();
    $temp = array();
    $b = '';
    $j=0;
    for ($i = 0; $i <strlen($a); $i++) {
        if ($a[$i] != " ") {
            $b .= $a[$i];
        } else {
            array_push($temp,$b);
            $b = '';
        }
    }
    $result=array_unique($temp);
    foreach ($result as $result){
        $j++;
    }
    return $j;
   }
print_r(ten($a));
include 'ten.html';