<?php
// $values = [1,2,5];
function reverseArray($values){
    $storedValues = [];
    for($i=0; $i<count($values); $i++){
        for($j=0; $j<count($values); $j++){
        // var_dump($values[$i],count($values));
// if()
        // print_r($values[$i]."\n");
        // 1>2  === true
        // 2,1,5 first swap 
        // 1>5 ==? true
        // 2,5,1 seccod swap
        // 2>5 == ? true
        // 5,2,1newValue
        //1>=2
        //2>1
        // if(count($values)){
        //     $values[$i] = $values[0];
        // }

        if($values[$i] > $values[$j]){
        //     array_push($storedValues, $values[$i]);
        //     print_r($storedValues);
        // }
        // if($j+1 == count($values)){
        //     $newValue = 0;
        // }
        // else{
        //     $newValue = $j+1;
        // }
        // else{
            $a = $values[$i];
            $b = $values[$j];
            $values[$i] = $b;
            $values[$j] = $a;
        // }
        array_push($storedValues, $values);
        // print_r($storedValues);
        }
    }
    }
    print_r($storedValues);
}
// reverseArray([2,3,10]);
// reverseArray([1,2,5]);
// reverseArray([4,5,2]);
// reverseArray([2,3,7]);

//[1, 2, 3, 4, 5, 6] => not possible
// [1, 2, 3, 4, 5] 
// [1, 2, 3, 4] 
// [1, 2, 3]
//  [1, 2] 
// [1]
// [1, 2, 5, 7, 9, 10] => wrong
// [11, 3, 6, 3, 6] => wrong
// [1, 6, 3, 9, 4] => correct


//other method
for ($i =0; $i<count($input)-1; $i++){
    // print_r($input);
    if ($input[$i]<= $input[$i + 1]) {
$a = $input[$i];
$input[$i] = $input[$i+1];
$input[$i+1] =$a;

array_push($store, $input);
print_r($input);
    }  
}

$arr = array(2,5,1,7,4);
for($i = 0; $i < count($arr); $i++ ) {
    echo $arr[$i];
 for($j = 0; $j < count($arr)-1; $j++) {
 if($arr[$j+1] < $arr[$j]){
 $temp = $arr[$j+1];
 $arr[$j+1] = $arr[$j];
 $arr[$j] = $temp;
 
 }
 }
}
print_r($arr);

// $values = [1,2,5];
function reversingArray($values){
    $storedValues = [];

    for($i=0; $i<=count($values); $i++){
        // var_dump($values[$i]);
        for ($j=0; $j <=count($values) - 2 -$i; $j++) { 
       
        if($values[$j] >= $values[$j+1]){
            array_push($storedValues, $values[$j]);
        }
        else{
            $a = $values[$j];
            $b = $values[$j+1];
            $values[$j] = $b;
            $values[$j+1] = $a;
        }
        array_push($storedValues, $values);
    }
    }
    print_r($storedValues);
}
reversingArray([1,2,5]);
