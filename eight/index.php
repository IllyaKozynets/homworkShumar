<?php
if(is_readable('file.txt')){
    $array=file_get_contents('file.txt');
    $array=unserialize($array);
}
if(isset($_POST['submit'])){
    $mass['name']=$_POST['name'];
    $mass['content']=$_POST['content'];
    $array[]=$mass;
    $a=serialize($array);
    file_put_contents('file.txt',$a);
}
foreach ($array as $value){
    echo "Комментарий от ".$value['name'].'<br>';
    echo $value['content'].'<br>';
}
include "main.html";