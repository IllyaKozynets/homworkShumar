<?php
$a=$_POST['text'];
function nine($a)
{
    $b='';
    for ($i = strlen($a); $i>=0; $i--){
        $b.=$a[$i];
    }
    return $b;
}
echo nine($a);
    include "nine.html";