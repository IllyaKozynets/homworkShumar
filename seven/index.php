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
$no=['ar','bb','sik','no','aga'];
$a=null;
foreach ($array as $value) {
    foreach ($no as $aga) {
        $temp = explode(" ", $value['content']);
        if(!in_array($aga,$temp)){
            $a=true;
        }
        else{$a=false;
        break;}
    }
    if($a=true) {
        echo "Комментарий от " . $_POST['name'] . '<br>';
        echo $_POST['content'] . '<br>';
    }
    else{
        echo 'Error!!!';
    };

}
include "main.html";