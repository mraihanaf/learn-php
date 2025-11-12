<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Control Structures</title>
</head>
<body>
    <h1>Control structures</h1>
    <p><a href="/">Go back</a></p>

    <h2>If</h2>
    <?php
        if(10 > 5){
            echo "yes, 10 > 5 <br>";
        } 
    ?>

    <h2>Else</h2>
    <?php
        if(10 < 5){
            echo "yes, 10 > 5 <br>";
        } else {
            echo "no, 10 < 5 <br>";
        }
    ?>

    <h2>Else if</h2>
    <?php
        $a = 1;
        $b = 1;

        if($a > $b) {
            echo "a is bigger than b";
        } else if ($a === $b){
            echo "a is equal to b";
        } else {
            echo "a is smaller than b";
        }
    ?>

    <h2>Alternative Syntax</h2>
    <?php if($a == $b): ?>
        $a is equal to $b
        <br>
    <?php endif; ?>
    
    <h2>While</h2>
    <?php
        $index = 0;
        while($index < 5){
            echo "Hello World! $index<br>";
            $index++;
        };

        $index = 0;
        while($index < 5):
            echo "Hello World! $index<br>";
            $index++;
        endwhile;
    ?>

    <h2>Do while</h2>
    <?php
        $index = 0;
        do {
            echo "Hello World! $index<br>";
            $index++;
        } while($index < 5);

    ?>

    <h2>For</h2>
    <?php
        for($index = 0; $index < 5; $index++){
            echo "Hello World! $index<br>";
        }

        for($index = 0; ; $index++){
            if($index > 3) break;
            echo "Hello World! $index <br>";
        }
        $index = 0;
        for(; ;){
            if($index > 3) break;
            echo  "Hello World! $index <br>";
            $index++;
        }

    ?>

    <h2>Foreach</h2>
    <?php
        $array = [1, 2, 3, 17];

        foreach($array as $value){
            echo $value, "<br>";
        }

        // key and value
        $array = [
            "one" => 1,
            "two" => 2,
            "three" => 3,
            "seventeen" => 17
        ];

        foreach($array as $key => $value){
            echo "Key : $key; Value : $value <br>";
        }

        // dynamic arrays
        foreach (range(1,3) as $value){
            echo $value, "<br>";
        }

        // unpacking nested arrays
        $array = [
            [1, 2],
            [3, 4]
        ];

        foreach($array as [$a, $b]) {
            echo "A: $a; B: $b;<br>";
        }
        
        foreach($array as [, $b]) {
            echo "B: $b;<br>";
        }

        // Iterate a constant array's values by reference

        foreach ([1, 2, 3, 4] as &$value) {
            $value = $value * 2;
        }

        // break
        
        foreach ([1, 2, 3, "stop"] as $value){
            if($value === "stop") break;
            echo $value. "<br>";
        }

        // continue
        
        foreach ([1, 2, 3, 4] as $value){
            if($value % 2 === 0) continue;
            echo $value, "<br>"; 
        }


        
    ?>

    <h2>Switch</h2>
    <?php
        $i = 1;
        
        switch($i) {
            case 0:
                echo "i equals 0<br>";
                break;
            case 1:
                echo "i equals 1<br>";
                break;
            default:
                echo "i is not 1 or 0<br>";
                break;
        };
    ?>

    <h2>Match</h2>
    <?php
        $food = "Nasi Goreng";
        $return_val = match($food) {
            "Nasi Goreng" => "The food is Nasi Goreng",
            "Ayam Goreng" => "The food is Ayam Goreng",
            "Nasi Kebuli" => "The food is Nasi Kebuli"
        };

        echo $return_val, "<br>";

        $age = 18;
        $output = match(true) {
            $age < 6 => "Balita",
            $age <= 12 => "Anak-anak",
            $age <= 18 => "Remaja",
            $age >= 19 => "Dewasa"
        };

        echo "Age: $age; Classification: $output<br>";
    ?>

    <h2>Declare</h2>

    <?php
          // configure runtime
        declare(ticks=1);
        echo "Declared ticks to 1<br>";
    ?>

    <h2>Require and Include</h2>
    <?php
        // require
        // if failure will produce error (safer)
        require 'example1.php';
        // require_once
        // prevent accidental duplication
        // recommended in production
        echo test(), "<br>";
        require_once 'example2.php';
        echo foo(), "<br>";

    
        // include
        // if failure will produce warning
        include 'notexists.php';
        // prevent accidental duplication
        // recommended in production
        include_once 'notexists.php';

    ?>

    <h2>Goto</h2>
    <?php
        for ($i = 0, $j = 50; $i < 100; $i++) {
            while ($j--) {
                if ($j == 17) {
                    goto end;
                }
            }
        }
        echo "i = $i";
        end:
        echo 'j hit 17';
    ?>
</body>
</html>