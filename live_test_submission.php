<?php
// Task 1:
$student = array(
    'name' => 'Alice', 'age' => 22, 'grade' => 'A'
);

echo "Age is:" .$student['age'];



// Task 2:
$student = array(
    'name' => 'Alice', 'age' => 22, 'grade' => 'A'
);

if (array_key_exists("grade",$student))
  {
  echo "Grade is:" .$student['grade'];
  }
else
  {
  echo "Grade not found";
  }



// Task 3:
$numbers = array(100, 200, 50, 40, 50);

foreach ($numbers as $value) {
    echo "Number is: " .$value ."\n";
  }



// Task 4:
$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

function checkLetter($name){
    return $name[0] === 'M';
}

$filteredNames = array_filter($names, 'checkLetter');

print_r($filteredNames);



// Task 5:
$originalString = "Hello, World!";
echo strrev($originalString);






?>