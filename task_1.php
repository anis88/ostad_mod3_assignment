<?php
// Task 1: String Manipulation
// Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.".
// Write a PHP function which takes "$text" as an argument to:
// Convert the string to all lowercase.
// Replace "brown" with "red" in the string.
// Print the modified text.

// Option 1:
// function modifyText($text){

//     if (str_contains($text, "brown")) {
//         $modifiedText = strtolower(str_replace("brown","Red",$text));
//         echo $modifiedText ."\n";
//     }
//     else{
//         echo "Nothing can be found to handle.";
//     }

// }

// modifyText("The quick brown fox jumps over the lazy dog.");



// Option 2:
$text = "The brown Cow loves to eat green Grass.";

function modifyText($text){

    if (str_contains($text, "brown")) {
        $modifiedText = strtolower(str_replace("brown","Red",$text));
        echo $modifiedText ."\n";
    }
    else{
        echo "Nothing can be found to handle.";
    }

}

modifyText($text);





?>