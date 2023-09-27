<?php
// Task 4: Multidimensional Array
// Create a multidimensional array called $studentGrades to store the grades of three students.
// Each student has grades for three subjects: Math, English, and Science.
// Write a PHP function which takes "$studentGrades" as an argument
// to calculate and print the average grade for each student.


// multidimensional array
$studentGrades = array(
    "Tasneem" => array("Math" => 90, "English" => 85, "Science" => 78),
    "Tarannum" => array("Math" => 88, "English" => 92, "Science" => 80),
    "Tanchan" => array("Math" => 76, "English" => 89, "Science" => 94)
);

// Function to calculate and print the average grade for each student
function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = 0;
        $count = 0;
        
        foreach ($subjects as $subject => $grade) {
            $total += $grade;
            $count++;
        }
        
        $average = $total / $count;
        
        echo "$student's Average Grade: $average\n";
    }
}

// Call the function with the $studentGrades array
calculateAverageGrades($studentGrades);


?>