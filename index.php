<?php
/*

//FizzBuzz algorithm using a while loop. Will print Fizz, Buzz and FizzBuzz up to 100. 

$counter = 0;
while ($counter <= 100) {
  $counter++;
  if ($counter % 3 === 0 && $counter % 5 === 0){
    echo "FizzBuzz\n";
  } else if ($counter % 3 === 0) {
    echo "Fizz\n";
  } else if ($counter % 5 === 0) {
    echo "Buzz\n";
  } else {
    echo "$counter\n";
  }
} 

*/

// FizzBuzz algorithm using a for loop and an empty array. Will print Fizz, Buzz and FizzBuzz up to 100. 

$output = [];
for ($i = 1; $i < 100; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    array_push($output, "FizzBuzz\n");
  } else if ($i % 3 === 0) {
    array_push($output, "Fizz\n");
  } else if ($i % 5 === 0) {
    array_push($output, "Buzz\n");
  } else {
    array_push($output, "$i \n");
  }
}
//print_r($output);


// Foreach loop for a nicer formatting. 

/*
foreach ($output as $value) {
  echo "$value\n";
}
*/

//Used for omitting Fizz or Buzz or FizzBuzz.

foreach ($output as $value) {
  if ($value === "Fizz\n"){
    continue;
  } else if ($value === "FizzBuzz\n") {
    echo $value;
    break;
  }
  echo "$value\n";
};

