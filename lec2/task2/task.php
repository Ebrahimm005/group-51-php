<?php

$alllangs = ['php', 'js', 'pyth'];

var_dump($alllangs);

echo "<pre>";
print_r($alllangs);
echo "</pre>";

$alllangs[2] = "python";
var_dump($alllangs);

$alllangs[] = "HTML";
print_r($alllangs);
// ------------------------------------------
$allusers = ['un' => 'Ahmed', 'pw' => '123', 'email' => 'ahmed@gmail.com'];

echo "<br>";
echo "<br>";
echo $allusers['un'];
echo "<br>";
echo $allusers['pw'];
echo "<br>";
echo $allusers['email'];
echo "<br>";


$allusers['ss'] = 'Mohamed';
var_dump($allusers);
echo "<br>";
// -------------------------------------------------
$product = [
    ['proname'=>'aa','price'=> '1200'],
    ['proname'=>'bb','price'=> '1400']
];

echo '<pre>';
var_dump($product);
echo '<pre>';

echo $product[1]['proname'];
echo "<br>";
//------------------------------------------------

$employee = [
    'ahmed' => [
        'name' => 'ahmed sayed',
        'age' => '20',
        'address' => 'cairo',
        'phones' => [123, 22, 33]
    ],
    'mohamed' => [
        'name' => 'mohamed sayed',
        'age' => '30',
        'address' => 'elmaadi',
        'phones' => [666, 77, 88]
    ]
];

echo $employee['ahmed']['phones'][0];
echo "<br>";

var_dump($employee['ahmed']['phones'][2]);
echo "<br>";
print_r($employee['ahmed']);
echo "<br>";
//------------------------------------------------------------


?>