<?php
$a="/tmp";
$slovo='load';
function direct($a,$slovo){
    $result=array();
    $files=scandir($a);
    foreach($files as $value){
        if ($value==$slovo){
            $result[]=$value;
        }
    }
    return $result;
}
print_r(direct($a,$slovo));