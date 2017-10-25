<?php
//冒泡法排序 按从小往大

$num = array(140,23,78,69,5,12,8);

for ($i = 1,$n = count($num);$i < $n;$i++){   //n =7  总共比较了 7-1 6次
    for ($j = 0; $j<$n-$i;$j++){
        if ($num[$j] > $num[$j+1]){
            $temp = $num[$j];
            $num[$j] = $num[$j+1];
            $num[$j+1] = $temp;     //互换
        }
    }
}
print_r($num);


























