<?php
$attend = 1;
$place = 'b';

if($attend === 0){
  echo 'パーティーの欠席を承りました';
}elseif($attend === 1){
  echo 'パーティーを出席にて承りました';
  if($place==='a'){
    echo '会場はAホテルでございます';
  }elseif($place === 'b'){
    echo '会場はBホテルでございます';
  }
}
