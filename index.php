<pre>
    <?php
$arrRange=range(-50, 50, 8);
print_r($arrRange);
shuffle($arrRange);//1
print_r($arrRange);

$string=implode('**',$arrRange);//2
echo $string;


$res10 = array_filter($arrRange, fn($item) => $item % 2 == 0);
unset($arrRange);
count($res10); //3

for($i=0;$i<20;$i++){$arrRandom[]=rand(-5,10);} //5
print_r($arrRandom);

for ($i = 0; $i < count($arrRange); $i++) { //4
    if ($arrRange[$i] < 0) {
    $arrRange[$i] = $arrRange[$i] * -1;
    }
    }
    print_r($arrRange);


$arr_unique=array_unique($arrRandom);
print_r($arr_unique);
echo('Количество повторений в массиве:'.count($arr_unique)."<br>");//6

$sumArr=array_sum($arrRandom);//7
echo("Сумма элементов массива:".$sumArr);

$resss = array_reduce($arrRandom, function($carry, $item){
    if($item % 3 == 0){
    $carry *= $item;
    };
    return $carry;
    }, 1); //8

unset($arrRandom[2],$arrRandom[3],$arrRandom[4]); //10

array_push($arrRandom, 1000); //12
print_r($arrRandom);


$res1=[...$arrRange,...$arrRandom];//9 (2 способ)
$res2=array_merge_recursive($arrRange,$arrRandom);//9 (1 способ)

print_r ($res1);
print_r($res2);





$arr = [
    [
    'street'=>"Гагарина",
    "house"=>7,
    "flat"=>303
],
[
    "street"=>"Елькина",
    "house"=>12,
    "flat"=>12
],
[
    "street"=>"Доватора",
    "house"=>113,
    "flat"=>24
],
];
usort($arr, function ($a,$b){
    return ($a['house']-$b['house']);
})



    ?>
</pre>