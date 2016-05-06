<?php
$a=$_POST['text'];
$b=$_POST['text_two'];
function getCommonWords($a, $b){
    $m='';
    $mass=array();
    $p='';
    $mass_two=array();
    $massive=array();
    for($i=0;$i<strlen($a);$i++){
        if ($a[$i]!=" "){
            $m.=$a[$i];
        }
        else{
            array_push($mass,$m);
            $m="";
        }
    }
    for($i=0;$i<strlen($b);$i++){
        if ($b[$i]!=" "){
            $p.=$b[$i];
        }
        else{
            array_push($mass_two,$p);
            $p="";
        }
    }
   for($i=0;$i<sizeof($mass);$i++){
       for($j=0;$j<sizeof($mass_two);$j++){
           if($mass[$i]===$mass_two[$j]){
               array_push($massive,$mass[$i]);
           }
       }
   }
    return $massive;
}
print_r(getCommonWords($a,$b));
include "one.html";