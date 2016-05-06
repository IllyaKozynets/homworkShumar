<?php
$string='A bacvg g lylh glgl. At gglf h;ffpt lglfd. Im lflglfllfg';
function all($string){
    $a=explode(". ",$string);
    $a=array_reverse($a);
    $a=implode(". ",$a);
    return $a;
}
echo all($string);