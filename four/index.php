<?php
$a="/tmp";
function direct($a){
    $files=scandir($a);
    return $files;
}
print_r(direct($a));