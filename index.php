


<?php
 
// decimal base integers
$deci1 = 50;
$deci2 = 654;
 
// octal base integers
$octal1 = 07;
 
// hexadecimal base integers
$octal = 0x45;
 
$sum = $deci1 + $deci2;
echo $sum;
echo "\n\n";
 
//returns data type and value
var_dump($sum)
   
?>



<?php
 
$val1 = 50.85;
$val2 = 654.26;
 
$sum = $val1 + $val2;
 
echo $sum;
echo "\n\n";
 
//returns data type and value
var_dump($sum)
   
?>

<?php
 
$name = "Abrha";
echo "The name of the Proffessional is $name \n";
echo "The name of the Proffessional is $name ";
echo "\n\n";
 
//returns data type, size and value
var_dump($name)
   
?>


<?php
 
if(TRUE)
    echo "This condition is TRUE";
if(FALSE)
      //  echo "This condition is not TRUE";
 
?>


<?php
 
$intArray = array( 10, 20 , 30);
 
echo "First Element: $intArray[0]\n";
echo "Second Element: $intArray[1]\n";
echo "Third Element: $intArray[2]\n\n";
 
//returns data type and value
var_dump($intArray);
 
?>

<?php
 
$nm = NULL;
echo $nm;	// this will return no output
 
// return data type
var_dump($nm);
 
?>

<?php
  $x = 29; // Variable 1
  $y = 4; // Variable 2
 
  // Some arithmetic operations on
  // these two variables
  echo ($x + $y), "\n";
  echo($x - $y), "\n";
  echo($x * $y), "\n";
  echo($x / $y), "\n";
  echo($x % $y), "\n";
?>

<?php
$x = 50;
$y = 30;
$z=0;
  if ($x == 50 and $y == 30)
      echo "and Success \n";
 
  if ($x == 50 or $y == 20)
      echo "or Success \n";
 
  if ($x == 50 xor $y == 20)
      echo "xor Success \n";
 
  if ($x == 50 && $y == 30)
      echo "&& Success \n";
 
  if ($x == 50 || $y == 20)
      echo "|| Success \n";
 
  if (!$z)
      echo "! Success \n";
?>

<?php
  $a = 80;
  $b = 50;
  $c = 80;
 
 
 //  var_dump($a == $c); echo "" ;
//   var_dump($a != $b) +"\n";
//   var_dump($a <> $b) + "\n";
//   var_dump($a === $c) + "\n";
//   var_dump($a !== $c) + "\n";
//   var_dump($a < $b) + "\n";
//   var_dump($a > $b) + "\n";
//   var_dump($a <= $b) + "\n";
//   var_dump($a >= $b);
?>
<?php
  $x = -12;
  echo ($x > 0) ? 'The number is positive' : 'The number is negative';
?>

<?php
  // Simple assign operator
  $y = 75;
  echo $y, "\n";
 
  // Add then assign operator
  $y = 100;
  $y += 200;
  echo $y, "\n";
 
  // Subtract then assign operator
  $y = 70;
  $y -= 10;
  echo $y, "\n";
 
  // Multiply then assign operator
  $y = 30;
  $y *= 20;
  echo $y, "\n";

  // Divide then assign(quotient) operator
  $y = 100;
  $y /= 5;
  echo $y, "\n";

   // Divide then assign(remainder) operator
  $y = 50;
  $y %= 5;
  echo $y;
?>

<?php
class Dog {
  public $name;

  public function bark() {
    echo $this->name . ' barked!';
  }
}

$roger = new Dog();
$roger->name = 'Roger';
$roger->bark();

?>

