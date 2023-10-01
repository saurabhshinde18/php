<?php


$b=array(1,2,3,4,5);
//printing associative array
$a = array ("MH"=>"mumbai" ,"RJ"=>"jaipur" ,"goa"=>"panji" ,"Gj"=>"gandhinagar");
print_r($a);

//printing indexed array

print_r($b);


//associative array using var_dump()

var_dump($a);

//we cant use for and while loop for printing associative array
//we can use foreach loop 

foreach($a as $array=>$value)
{
    echo "\n";
    echo $array;
    echo "      ";
    echo $value;
}


//creating and printing 2d dimensional array

$arr=array(array(11,22,33),array(22,44,55));

print_r($arr);
var_dump($arr);


//printing using for loop

for($i=0;$i<count($arr);$i++){


    for($j=0;$j<count($arr[$i]);$j++)
    {
        echo $arr[$i][$j];
        echo"\n";
    }
}



//using foreach loop
foreach($arr as $row){
    foreach($row as $x){
    echo $x;
}
}



?>
