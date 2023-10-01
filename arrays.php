//printing an array using  functions
<?php
//printing an array using print_r function
 $a=array(1,2,3,4,5);
print_r($a);
echo $a;

//printing an array using var_dump function
var_dump($a);


//printing an array using for loop
for($i=0;$i<count($a);$i++)
{ 
    echo $a[$i] ;
    echo "\n";
}

//printing an array using while loop 
$i=0;
while($i<count($a))
{
    echo $a[$i]."\n" ;
    $i++;
}


//using array foreach loop 
foreach($a as $array)
{  echo "\n";
   echo $array;
}

//php true=1 and false=0/empty







?>


