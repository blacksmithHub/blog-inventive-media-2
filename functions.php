<?php
// echo "Hello World <br>";


// echo "DONE! <br>";

// $name = initialize(); // John

// echo $name;

// function initialize()
// {
//     echo "Initialize function! <br>";

//     $name = "John";
//     $age = 25;

//     return $name;
// }

$user = "John";

$section = "section A"; // global scope

$genderGlobal = null;

$finalGrade = computeAndGetFinalGrade($section); // 90

echo $finalGrade . "<br>";

echo $genderGlobal; // male

echo $user; // Jane

/**
 * This will compute a specific student's 
 * grade from 1st semester to 2nd semester
 */
function computeAndGetFinalGrade($value) // section A
{
    // echo $value;

    // formula here

    $genderLocal = "male"; // local scope

    global $genderGlobal;

    $genderGlobal = $genderLocal;

    $GLOBALS['user'] = "Jane";

    return 90;
}
