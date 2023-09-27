<?php
// Task 1:Create an associative array called $student with the following key-value pairs
// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'
// Print the age of the student.

$student = array(
    'name' => 'Alice', 'age' => 22, 'grade' => 'A'
);

echo "Age is:" .$student['age'];



// Task 2: Create an associative array called $student with the key-value pairs:
// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'
// Check if the 'grade' key exists in the array using array_key_exists() and print the result.

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



// Task 3: Create an array called $numbers with values 100, 200, 50, 40, 50.
// Use a foreach loop to print each value in the array.

$numbers = array(100, 200, 50, 40, 50);

foreach ($numbers as $value) {
    echo "Number is: " .$value ."\n";
  }



// Task 4:Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.
// Use the array_filter() function to filter names that start with the letter 'M'.
// Print the filtered names.

$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

function checkLetter($name){
    return $name[0] === 'M';
}

$filteredNames = array_filter($names, 'checkLetter');

print_r($filteredNames);



// Task 5: Create a string variable $originalString with the value 'Hello, World!'.
// Use the strrev() function to reverse the string.
// Print the reversed string.

$originalString = "Hello, World!";
echo strrev($originalString);

$numbers = ['a','b'];
$result = $numbers[1];
echo $result;




$marks = array(
	
	"A" => array(
		"Math" => 95,
		"English" => 85,
		"Science" => 74,
	),
		
	"B" => array(
		"Math" => 95,
		"English" => 85,
		"Science" => 74,
	),
	
	"C" => array(
		"Math" => 95,
		"English" => 85,
		"Science" => 74,
	),
);

echo "Display Marks: \n";
	
print_r($marks);



?>