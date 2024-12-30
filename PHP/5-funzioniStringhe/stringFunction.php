<h1>

<?php

$lastName = 'Hoxha';
$firstName = 'Hidran';
$email = '@CAZZOGUARDI@GMAIL.COM';
$address = 'èàò';

echo (strtoupper($lastName)) . "<br>";
echo (strtolower($firstName)). "<br>";
$email = strtolower($email). "<br>";
$email = trim($email);
echo ($email);

$arr1 = array('è','ò','à');
$arr2 = ['e', 'o', 'a'];

// $address = str_replace('à', 'a', $address);
$address = str_replace($arr1, $arr2, $address);
echo "Address= ".($address); 

$atExist = strpos($email, '@');
if($atExist !== false){
    echo ("<br>La chiocciola c'è: ");
}
var_dump($atExist);

$str = '1,2,3,4,5,6';
$arr = explode(',', $str);
echo "<br>";
var_dump($arr);

$sayHi = ['h','e','l','l','o'];
echo "<br>".implode('-', $sayHi);
echo "<br>".join('/', $sayHi);

?>

</h1>