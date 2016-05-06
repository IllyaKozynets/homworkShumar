<?php
$a='mama ya mlolodec. funkcia rabotaet.';
function eleven($a){
    $a[0]=strtoupper($a[0]);
    for($i=0;$i<strlen($a);$i++){
        if($a[$i]=='.'&&$a[$i+1]==' '){
            $a[$i+2]=strtoupper($a[$i+2]);
        }
    }
    return $a;
}
echo $a;
echo eleven($a);