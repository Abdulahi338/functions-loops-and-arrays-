
 <?php
function sum($exam){
    $total =0;
    foreach ($exam as $ex){
        $total +=$ex;

    }
    return $total;

}

//creating array to stor student insteadOf 

$exam = array(
"Ali"=>23,
"Osman"=>45,
"Sucdi"=>90,
"Jacfar"=>100,
"Guleyd"=>60,
"Asad"=>100,
);

foreach ($exam as $name=>$item){

    echo "$name :  $item " , " , ";

}

$result = sum($exam);

echo "the total scores is $result";



?>