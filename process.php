<?php
echo "<h1>hello world</h1>";
echo 5*6;
echo "<br>";
echo 5*6 ."hi";
echo "<br>";
echo "hello this is foo";
echo "<br>";


$myname="mais";
$myage= 20;
echo $myname;
echo $myage;

function printname(){
    echo "this is from fun";
}
printname();
for ($i =0;$i<5; $i++) {
    echo "<br> from for";
}
function countx($number){
    for ($i=0; $i<$number; $i++){
        echo $i;
    }
}
countx(100);

$myarr=[10,20,"hello",5.0];
//echo $myarr[2];

$array2=[
   //"key"=>value
    "one"=> 50,
    "hi"=>"from hi"
];
echo $array2["hi"];

$array3=[
    "two"=>"ahmad",
    "hi"=>88
];
echo "<br>";
echo  $array3["hi"];

$array4=[
    "one"=> 50,
    "hi"=>"from hi"
];
echo "<br>";
//echo $array4['arr'][0];
foreach ($array4 as $el){
    echo $el;
}

$correct_name="ali";
$correct_password="123";

if($correct_name==$_POST['username']&&$correct_password==$_POST['pass']){
    echo "<h1 class='welcome' >welcome to admin</h1>";

}else {
    echo "<h1 class='not-welcome'>no welcome</h1>";
}
echo "welcome". $_POST['username']."your pass".$_POST['pass'];


$can_see =true;
if($can_see){
    echo "<h1 class='welcome' >welcome to admin</h1>";

}else {
    echo "<h1 class='not-welcome'>no welcome</h1>";
}

