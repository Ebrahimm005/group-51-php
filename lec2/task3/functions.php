<?php
// example using array_merge
$arr1 = ["ahmed", "Mohamed", "Mahmoud"];
$arr2 = ["Esraa", "Aya", "Eman"];

$merged_arr = array_merge($arr1, $arr2);
echo'<pre>';
print_r($merged_arr);
echo'</pre>';
echo "<hr>";
// ------------------------------
// example using in_array
$numbers = [1, 2, 3, 4, 5];
$search_value = 5;

if (in_array($search_value, $numbers)) {
    echo "$search_value exists in the array.";
} else {
    echo "$search_value does not exist in the array.";
}
echo "<hr>";
// ------------------------------
// example using  array_diff

$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [3, 4, 5, 6, 7];

$difference = array_diff($numbers1, $numbers2);

print_r($difference);
echo "<hr>";
// ------------------------------
// example using  array_diff_assoc
$array1 = ["a" => "ahmed", "b" => "mohamed", "d" => "ebrahim"];
$array2 = ["a" => "ahmed", "b" => "mohamed", "c" => "mahmoud"];

$difference = array_diff_assoc($array1, $array2);

print_r($difference);
?>