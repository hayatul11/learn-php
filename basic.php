<?php
// $string = "Bangladesh";
// $number = 1234;
// $myName = "";
// $my_name = "";
// $my122 = ""; 

$name = "Bangladesh";
$age = 15 ;
$question = "How are you?";

$word = "age";

//echo $word;
//echo $$word;
echo $age;

echo 'hello ' .$name;
echo "\n";

// echo "Hello $name";
echo "Hello {$name}, {$question}";

echo "\n \n \n";

/////////////class 1.3//////////

define ('PI',3.14159); 
$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";

// echo "Value of PI = {PI}".PI;
// echo constant('PI');
echo PI;

$constant = 'constant';
// echo "Value of PI ={$constant('PI')}";

echo "\n \n \n";

// classssssss 1.4 ///////////

/* 
Integer
Double / Float
Boolean
Null
String
Array
Object
Resource

*/



$name ="Earth";
var_dump($name);
echo "\n";

$age =23;
$age =23.55; //float
$age =null;
var_dump($age);
echo "\n";

$name1 ="Hayatul";
$name2 ="Emon";
var_dump($name1,$name2);

$result = true; //boolean
var_dump($result);


$same =" Earth";
// echo 'we\'re living on'.$same;
//$same = strtoupper($same);
echo "we're living on {$same}\n";
printf("we're living on %s",$same);
echo "\n";

$fname = "Isaac";
$lname ="Newton";
printf("His %s name is %s %s","Full" ,$fname,$lname);

echo "My name
is 
Hayatul
emon";
echo "\n";

$planet1 ="Mercury";
$planet2 ="Jupiter";
echo "The smallest planet is ".$planet1." and biggest is ".$planet2."\n";
echo "The smallest planet is {$planet1} and biggest is {$planet1}\n";
printf("The smallest planet is %s and biggest is %s ",$planet1,$planet2);

echo "\n \n ";

/////////////class 1.7///////////////////

// + - * / = Arithmetic Operator
// += -= *= /= Assinment Operator

$number = 12;
// $number =12 * 2;
// $number = $number + 13;
// $number +=13;
// $number -=13;
// $number *=13;
// $number /=13;
// $number = 12 /2;
// $number = 13 % 2; //vag ses
// $number2 = $number - 20;
// $number = (13-5)*6;
// $number = (24-4) / (7-2);
// $number++; //$number +=1; $number = $number +1;
$number--;

// echo $number, "\n", $number2;
echo $number;

echo "\n \n";

////////////////class 1.8//////////

// $number = 12 + 3; // 12 3 opeand ; + operator

$a = 7;
// $x = $y = 2;
$x = $y = $a;
echo $x, "\n", $y;

echo "\n";

$n = 7;
 $m = $n++;
// $m = ++$n;
echo $m, "\n \n", $n;

/* explain
$m = $n++
$m = $n
$n = $n + 1
*/


/* explain
$m = ++$n; 
$m = $n++;
$n = $m;
*/
echo "\n \n";

//////////////////classs 1.9////////////
 $n = 120;
 $o = 012; // octel
 $h = 0x2B;

//  printf("The number is %d and %d and %d",$n,$o,$h);
// printf("Binary %b is %b",$n,$o);
// printf("Binary %x is %x",$n,$o);
printf("Binary %o is %o",$n,$h);


echo "\n \n";
////////////////class 1.10//////////
$fname = "Isaac";
$mname = "Noting";
$lname = "Newton";

printf('his name is %3$s %1$s %2$s',$fname,$mname,$lname);
echo "\n";

printf('Binary of %1$d is %1$b',12);
echo "\n \n";

$n = 45.125;
printf("%.2f",$n);
echo "\n";

$m = 123; //0123
$n = 34; // 0034

printf("%04d \n",$m);
printf("%04d \n",$n);
echo "\n";

$p = 123.5666;
$q = 43.90998;

printf("%08.3f \n",$p);
printf("%08.3f",$q);

echo "\n \n";

////////////class 1.11//////////////

$f = "hayatul";
$l = "emon"; 

$output = sprintf("his %s is %s",$f,$l);
echo strtoupper($output),"\n"; // uppercase 
echo strtolower($output),"\n"; // lowercase
echo ucwords($output); // capitalize

echo "\n \n";

/////////////////classssss 1.12//////

// logical operators
  // == equal
  // != not equal
  // > greater than
  // < less than 
  // >= greater than equal
  // <= less than epual
  // && and
  // || or

$n = 9;
if($n % 2 == 0){
    echo "$n is an even number";
}else{
    echo "$n is a odd number";
}

if ($n > 10){
    echo "\n $n is greater than 10";
}else{
    echo "\n $n is les than number";
}

$n = 14;
$m = 16;

if($m != $n){
    echo " \n M is not equal to N \n \n";
}

$alam = 2000;
$rahim = 200;
if( $alam >= $rahim){
    echo "Alam has same or more amount of money as Rahim";
}elseif($alam>$rahim){
    echo "Alam has more money than Rahim";
}elseif ($alam < $rahim){
    echo "Alam has less money than Rahim";
}elseif($alam == $rahim) {
    echo "Alam has same money than Rahim";
}
echo "\n \n";

$age = 12;

if($age >= 13 && $age <=19){
    echo "This person is a teenager";
}else{
    echo "This person is not a Teanager \n \n";
}

$food = "tuna";

if("tuna" == $food || "salmon" == $food){
    echo "It has Vitamin D";
}else{
    echo "We don't know it contains vitamin D";
}

echo "\n \n";

/////////////// class 1.13////////////

// 1- divisible by 4 ?
// 2- divisible by 100 ?
// 3- divisible by 400 ?

$year = 2020;

if($year % 4 ==0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
}elseif($year % 4 ==0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}elseif($year % 4 ==0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}

echo "\n";

if (false && true){ // not show ; ture && true : show;
    echo "wow";
}
if(false || true){ // show ; false || false : not show ; 
    echo "wow";
}

echo "\n \n";

// $year = 2014;

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 ==0)){
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year";
}

/* explain

if(true && (false || true))
   (true && true){
    echo true
} */

echo "\n \n";

////////////////////class 1.14444////////

$condition1= true;
$condition2 = false;
$condition3 = true;

if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else{
            echo "no 1";
        }
    }else{
        echo "no 2";
    }
}else{
    echo "no 3";
}

echo "\n";

if($condition1 && $condition2 && $condition3){
    echo "Hello";
}elseif($condition1 && $condition2){
    echo "no 1";
}elseif($condition1){
    echo "no 2";
}else{
    echo "no 3";
}

echo "\n \n";

/////////////class 1.155555555////////////

 // ternary operator 

 $n = 12;

 if(12 == $n){
     echo "Twelve";
 }elseif(10 == $n){
     echo"Ten";
 }else{
     echo "A number";
 }
 echo "\n";

//  $numberInWord =(12 == $n) ? "Twelve" : "A Number";
$numberInWord =(12 == $n) ? "Twelve" : ((10 == $n) ? "Ten":"A Number");

 echo $numberInWord;

 echo "\n";

 if($n % 2 == 0){
     echo "Even number";
 }else{
     echo "odd number";
 }
 echo "\n";

 $result =($n % 2 == 0) ? "Even number": "Odd number";
 echo $result;

 echo "\n \n";

 ////////class 1.166666//////////

 // switch & case 

 $n = 12;
 $r = $n % 2;

 switch ($r){
     case 0:
        echo "$n is an even number \n";
        break;
    default:
        echo "$n is an odd number \n";
 }

$color = 'red';

switch($color){
    /*case 'red';
        echo "Red is our favorite color";
        break;
    case 'green';
        echo "Green is our favorite color";
        break; */
    case 'red':
    case 'green':
        echo ucwords($color)." is our favorite color";
        break;
    case 'blue';
        echo "Blue is not favorite color";
        break;
    default:
        echo "This color is ok";
}

echo "\n \n";

/////////////////class 1.1777//////////

// switch && case;

$n = -13;
// $r = abs($n % 2);
$r =($n % 2);

// bad way
switch($r){
    case 0:
        switch($n){
            case $n > 0;
                echo "$n is a positive even number";
                break;
            case $n<0:
                echo "$n is a nagative even number";
                break;
        }
        break;
    default:
    switch($n){
        case $n>0:
            echo "$n is a positive odd number";
            break;
        case $n <0:
            echo "$n is a negative odd number";
    }
}
echo "\n \n";

// best way
switch(true){
    case(0==$r && $n>0):
        echo "$n is a positive even number";
        break;
    case(1==$r && $n>0):
        echo "$n is a positive odd number";
        break;
    case (0==$r && $n<0):
        echo "$n is a negative even number";
        break;
    case ( -1==$r && $n<0):
        echo "$n is a negative odd number";
}

echo "\n";

////////// Class 1.188888888///////

// switch && case

$string = "9balls";

switch($string){
    case (string) 9:
        echo "9";
    break;
    case(string) "9balls";
        echo "Nine Balls";
        break;
    case(string) 8;
        echo "8";
    break;
    case(string) "8balls":
        echo "Eight Balls";
    break;
}
echo "\n \n";

//////////class 1.199999///////////

// $f = (false || true);
// $e = false or true; // ($e = false) or true / $e = false;

$f = true && false;
$e = true and false;

var_dump($f,$e);

echo "\n";

/////////class 1.200////////

// olternative sintex

$n =12;

if($n%2==0){
    echo "Even number";
}else{
    echo "odd number";
}
echo PHP_EOL; // "\n"

if($n % 2 == 0):
    echo "Even number";
    echo PHP_EOL;
    echo "Some text";
else:
    echo "Odd number";
    echo PHP_EOL;
    echo "some text++";
endif;

echo PHP_EOL;

switch ($n % 2):
    case 0:
        echo "Even number";
    break;
    default:
        echo "odd number";
endswitch;

echo "\n \n";
?>

<?php

$n = 12;

if($n % 2== 0):
    ?>
    even number
    some text
    <?php
    else:
        ?>
    odd number
    some text++
    <?php
    endif;

    echo "\n";

    ////////class 1.211////////

    // Tearnary operator

    $n = 10;

    // $result = ($n % 2 == 0) ? "A" : ($n == 11) ? "B" : "C";
    $result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");

    echo $result;

echo "\n \n";

///////////class 1.222222222222//////

// loop  

// for loop

// for($i = 0; $i<=10; $i+=1){
 for($i = 1; $i<=20; $i+=2){
    echo $i;
    echo PHP_EOL;
}

for($i = 1; $i<10; $i++){
    echo PHP_EOL;
    for($j=0; $j<$i;$j++){
        echo "*";
        
    }
}
echo PHP_EOL;

// while loop

$i = 0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}

// do loop;

$i = 0;

do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

// go to loop 

$i = 0;
a: $i++;

echo $i.PHP_EOL;
if($i<10) goto a;


echo "\n \n";

///////////class 1.233333333/////////

// for && loop

// for($i = 10; $i > 0; $i--){
 for($i = 10; $i > 0; $i-=1){
    echo $i;
    echo PHP_EOL;
}
echo "\n \n";

for($i = 10; $i > 0; $i-=1){
    echo $i.":".(10-$i);
    echo PHP_EOL;
}

echo "\n";

for($i = 10, $j = 0; $i > 0; $i -=1,$j++){
    // echo $i.":".$j;
    echo $i.":".(10-$i);
    echo PHP_EOL;
}

echo "\n \n";

////////// class 1.244444444;;//////

// for loop;

$n = 6;

for($i=$n, $factorial=1; $i>1; $i--){
    // $factorial = $factorial * $i;
    $factorial *= $i;
}

printf("Factorial of %d is %d",$n,$factorial);


echo "\n \n";

//////// Class 1.2555555555555/////////

$n = 5;
$result = 1;

for($i=$n; $i>1;$i--){
    $result *=$i;
}
echo "Factorial of {$n} is {$result} \n";

$j=1;
for($n=1; $n<=10; $n++){
    $result = 1;
    for ($i = $n; $i > 1; $i--){
        $result *=$i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
}

echo "Total {$j} is operation \n";

echo "\n";

// batter way
$result = 1;
$j = 1;
for($n=1;$n<=10;$n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$n} number oparatio ";

echo "\n";

///////// Class 1.266//////////////

// for loop

for ($i=0; $i<100; $i+=7){
    echo $i."\n";
}

echo "\n";

for($i=0; $i<100; $i++){
    // if($i % 7==0) echo $i."\n";
    // if($i % 11 == 0) echo $i."\n";

    echo $i % 7 == 0 ? $i. "\n": '';
    echo $i % 11 == 0 ? $i. "\n": '';
}

echo "\n \n";

for ($i=0,$j=0; $i <100; $i += 7, $j += 11){
    echo $i. "\n";
    echo $j < 100 ? $j. "\n":'';
}

echo "\n \n";

////////// Class 1.2777777777//////////

// while loop ++

$i = 0;

while($i<5){
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo "=============== \n";

$j=0;
while($j++ <5){
    echo $j;
    echo PHP_EOL;
}

echo "=============== \n";

$j=0;

while(++$j < 5){
    echo $j ."\n";
}

echo "=============== \n";

$x = $y = 5;
// $x = $y++;
$x = ++$y;


echo $x. ":".$y;
echo "\n \n";


///////// Class 1.288888888////////

// loop condition;
// continue && break;

for($i=20; $i<60; $i++){
    echo $i. "\n";

    if($i==30){
      break;
    }
}
echo "\n";

for($i=20;$i<50;$i++){
    
    if($i % 14==0){
         echo $i ."\n";
    break;
    }
}

echo "\n";

for($i=20; $i<40; $i++){
    if($i<35){
         continue;
    }
    echo $i ."\n";  
}

echo "\n";

///////// Class 1.29999999999///////


$veryold = 0;
$old =1;
$new =1;

for($i=0;$i<10;$i++){
    echo $veryold ." ";
    $old=$new;
    $new= $old + $veryold;
    $veryold = $old;
}

// explain 
/*
initial

v=0;
o=1
n=1

1st loop
v=1
o=1
n=1

2nd loop
v=1
o=1
n=2

*/

echo "\n";

//////////// Class 1.3000000///////

// Spesship operator;


$x = 3; 
$y=5;

function greaterOrSmaller($x,$y){
    if ($x>$y){
        return 1;
    }elseif($x==$y){
        return 0;
    }else{
        return -1;
    }
}

if(greaterOrSmaller($x,$y)==1){
    echo "{$x} is greater than {$y}";
}elseif(greaterOrSmaller($x,$y)==0){
    echo "{$x} is equal to {$y}";
}elseif(greaterOrSmaller($x,$y)==-1){
    echo "{$x} is less than {$y}";
}
echo "\n ========== \n";

$result = $x<=>$y;

if($result==1){
    echo "{$x} is greater than {$y}";
}elseif($result==0){
    echo "{$x} is equal to{ $y}";
}elseif($result==-1){
    echo "{$x} is less than {$y}";
}

echo "\n";

/////// Class 1.3111111/////

// Null Coalesce operator;

$default_lat = 23.9;
$default_lon = 90.3;

$user_lat=12.34;

// ternary operator;

$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;

echo "\n";

// if && else;

if(isset($user_lat)){
   echo $lat = $user_lat;
}else{
   echo $lat = $default_lat;
}

echo "\n";

// Null Coalesce operator;

$lat=$user_lat ?? $default_lat;
echo $lat;


echo "\n \n ======END BASIC CLASS===== \n \n";