<?php

$a=$_POST['text'];
$file=file("./a.txt");
function myfile($a,$file){
for($i=0;$i<sizeof($file);$i++){
    if(strlen($file[$i])>$a){
        unset ($file[$i]);
    }
}
    file_put_contents("./a.txt",$file);
}
print_r($file);
if(isset($a)){
    myfile($a,$file);
    $file=file("./a.txt");
    print_r($file);
}
include 'three.html';
