<?php
$a=$_POST['text'];

 function two($a){
     $temp=array();
     $b='';
 for($i=0;$i<strlen($a);$i++){
     if($a[$i]!=" "){
         $b.=$a[$i];
     }
     else{
         $temp[]=$b;
         $b='';
     }
 }
     $count=count($temp)-1;
     for($i=$count;$i>=0;$i--){
         for($j=0;$j<=($i-1);$j++){
             if(strlen($temp[$j]<$temp[$j+1])){
                 $p=$temp[$j];
                 $temp[$j]=$temp[$j+1];
                 $temp[$j+1]=$p;
             }
         }
     }
     return array_slice($temp,0,3);
 }
print_r(two($a));
include 'two.html';