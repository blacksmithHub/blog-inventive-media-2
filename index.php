<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>

    <?php
    // echo "Danniel";
    /*
    This is a comment
    */


    // $name = "Danniel";

    // echo "<h1>Hello World</h1>";
    // print "Hello World";


    // 1. String data type
    // $x = "Hello World";
    // $y = 'Hello World';

    // echo $x;
    // echo "Hello World";

    // $X = "Daniel";

    // echo $x;

    // 2. integer & float data type
    // $age = 25; // this is a integer
    // $weight = 80.5; // this is a float

    // echo $weight;

    // 3. boolean data type
    // $x = false; // this is a boolean
    // $x = "true"; // this is a string

    // echo $x;

    // 4. array data type
    // $cars = (object) [
    //     "toyota" => "TOYOTA",
    //     "kia" => "KIA",
    //     "honda" => "HONDA",
    //     "age" => 20
    // ];

    // // print_r($cars);
    // echo $cars["toyota"];

    $cars = [
        ["toyota", "kia", "honda"],
        ["subaro", "ford"]
    ];

    // echo $cars[1][1];

    // echo strlen($cars[1][1]);

    // 5. replace string
    // $title = "This is a new post";

    // echo str_replace("post", "title", $title);

    // 6. constants
    // define("gender", "male");

    // echo gender;

    // $gender = "female";
    // $gender = "non-binary";

    // echo $gender;

    // 7. arithmetic operators
    // $x = '1';
    // $y = 2;

    // // $sum = $x + $y;

    // $x += $y;

    // echo $x; // $x = $x + $y

    // 8. comparison operators
    // $x = 2; // string
    // $y = 2; // integer

    // echo $x <= $y; // true

    // 9. increment/decrement
    // $x = 1;

    // // ++$x; // $x = $x + 1;
    // $x--;

    // echo $x; // 2

    // 10. logical operators
    // $x = 'test'; // true
    // $y = ''; // false

    // // echo $x || $y;
    // // echo !$x; // false

    // echo $x and !$y;

    // 11. concatenation
    // $x = "Hello";
    // $y = "World";

    // echo $x .= $y; // $x = $x . $y;

    // 12. array operators
    // $x = [1, 2, 3]; // 3
    // $y = [1, 3, 2]; // 3

    // print_r($x == $y);

    // 13. if statement
    // $x = 2;
    // $y = 1;

    // if (($x !== $y) and ($x > $y)) {
    //     echo "both are not equal";
    //     echo "Greater than!";
    // } elseif ($x < $y) {
    //     echo "Less than!";
    // } else {
    //     echo "else!";
    // }

    // 14. grade system
    // $grade = 75;

    // if ($grade >= 75) {
    //     echo "You passed!";
    // } else {
    //     echo "You failed!";
    // }

    // 15. switch statement
    // $gradeResult = "passed";

    // switch ($gradeResult) {
    //     case 'passed':
    //         echo "You passed!";
    //         break;

    //     default:
    //         echo "You failed!";
    //         break;
    // }

    // 16. while loop
    $age = 25;

    // while ($age < 45) {
    //     $age++;
    // }

    // do {
    //     $age++;
    // } while ($age < 45);

    // for ($x = $age; $x < 45; $x++) {
    //     echo $x . ', ';
    // }

    // echo $age;

    // 17. for loop
    // for ($x = 1; $x < 3; $x++) {
    //     echo $x . '<br>';
    // }

    // $cars = ["toyota", "honda", "kia"];

    // for ($x = 0; $x < count($cars); $x++) {
    //     echo $cars[$x] . '<br>';
    // }

    // $cars = ["toyota", "honda", "kia"];

    // $x = 0;

    // while ($x < count($cars)) {
    //     echo $cars[$x] . "<br>";
    //     $x++;
    // }
    // $cars = ["toyota", "honda", "kia"];

    // $x = 0;

    // do {
    //     echo $cars[$x] . "<br>";
    //     $x++;
    // } while ($x < count($cars))

    // $cars = ["toyota", "honda", "kia"];

    // foreach ($cars as $car) {
    //     echo $car . "<br>";
    // }

    // $cars = [
    //     ["toyota", "kia", "honda"],
    //     ["subaru", "ford"]
    // ];

    // foreach ($cars as $car) {
    //     // $car = ["subaru", "ford"]
    //     foreach ($car as $data) {
    //         echo $data . "<br>";
    //     }
    // }

    $users = [
        [
            "username" => "johndoe",
            "email" => "johndoe@mail.test"
        ],
        [
            "username" => "janedoe",
            "email" => "janedoe@mail.test"
        ]
    ];

    foreach ($users as $user) {
        // foreach ($user as $data) {
        //     echo $data . "<br>";
        // }

        echo $user["username"] . "<br>";
    }

    ?>
</body>

</html>