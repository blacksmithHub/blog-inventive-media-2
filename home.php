<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "John";
    ?>

    <!-- <ul> -->
    <?php
    if (true) {
        echo '<li style="color: red">
            item 1
        </li>';
    }
    ?>

    <?php
    // if (false) :
    ?>
    <!-- <li style="color:red">
                <h1>Item 2</h1>
            </li> -->
    <?php
    // endif;
    ?>

    <!-- <li style="color: red">
            item 3
        </li>
    </ul> -->


    <ol>
        <?php
        $cars = ["toyota", "kia", "honda"];

        foreach ($cars as $car) :
        ?>
            <li>
                <?php
                // echo $car; 
                ?>
            </li>
        <?php
        endforeach;
        ?>
    </ol>



</body>

</html>