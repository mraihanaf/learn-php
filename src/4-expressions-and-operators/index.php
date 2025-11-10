<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Expressions and Operators</title>
</head>
<body>
    <h1>4. Expressions and Operators</h1>
    <p><a href="/">Go back</a></p>

    <h2>Comparison</h2>
    <?php
        // comparison
        $example0 = 1 > 0;
        $example1 = 1 < 0;
        $example2 = 1 == 0;
        $example3 = 1 != 0;
        $example4 = 1 === 0;
        $example5 = 1 !== 0;
        $example6 = 1 >= 0;
        $example7 = 1 <= 0;

        // spaceship

        $example8 = 1 <=> 0;

        echo "1 > 0 -> ", var_dump($example0), "<br>";
        echo "1 < 0 -> ", var_dump($example1), "<br>";
        echo "1 == 0 -> ", var_dump($example2), "<br>";
        echo "1 != 0 -> ", var_dump($example3), "<br>";
        echo "1 === 0 -> ", var_dump($example4), "<br>";
        echo "1 !== 0 -> ", var_dump($example5), "<br>";
        echo "1 >= 0 -> ", var_dump($example6), "<br>";
        echo "1 <= 0 -> ", var_dump($example7), "<br>";
        echo "1 <=> 0 ->", var_dump($example8), "<br>";
    ?>

    <h2>Ternary</h2>
    <?php
        // Ternary
        $example0 = true ? "if true" : "if false";
        $example1 = false ? "if true" : "if false";
        echo var_dump($example0), "<br>";
        echo var_dump($example1), "<br>";
    ?>

    <h2>Arithmethic</h2>
    <?php
        echo "1 + 1 = ", 1+1, "<br>";
        echo "1 - 1 = ", 1-1, "<br>";
        echo "1 * 1 = ", 1*1, "<br>";
        echo "1 / 1 = ", 1/1, "<br>";
        echo "1 ** 1 = ", 1**1, "<br>";
        echo "1 % 1 = ", 1%1, "<br>";
        
        // identity
        // Conversion of $a to int or float as appropriate. 
        echo "+1 = ", +1, "<br>";
        // negation
        // oppsite of $a
        echo "-1 = ", -1, "<br>"

    ?>


    <h2>Increment & Decrement</h2>
    <?php
        $example0 = 0;
        echo var_dump($example0), "<br>";
        $example1 = $example0++;
        echo var_dump($example1), "<br>";
        $example2 = ++$example0;
        echo var_dump($example2), "<br>";
        $example3 = $example0--;
        echo var_dump($example3), "<br>";
        $example4 = --$example0;
    ?>

    <h2>Assignment</h2>
    <?php
        $example0 = 0;
        echo var_dump($example0), "<br>";
        $example0 += 1;
        echo var_dump($example0), "<br>";
        $example0 -= 1;
        echo var_dump($example0), "<br>";
        $example *= 1;
        echo var_dump($example0), "<br>";
        $example /= 1;
        echo var_dump($example0), "<br>";
        $example %= 1;
        echo var_dump($example0), "<br>";
    ?>

    <h2>Execution</h2>
    <?php
        $example0 = `ls -lah`;

        echo $example0, "<br>";
    ?>

    <h2>Logical</h2>
    <?php
        echo var_dump((true and false)), "<br>";
        echo var_dump((true or false)), "<br>";
        echo var_dump((true xor false)), "<br>";
        echo var_dump((!true)), "<br>"; // not
        echo var_dump((true && false)); // and
        echo var_dump((true || false)); // or
    ?>

    <h2>String</h2>
    <?php
        $example0 = "Hello ";
        $example1 = $example0 . "World!";

        var_dump($example1);
        $example0 = "Hello ";
        $example0 .= "World!";
        var_dump($example0);
    ?>

    <h2>Array</h2>
    <?php
        echo var_dump(array([0, 1]) + array([2, 3])), "<br>";
        echo var_dump(array([0, 1]) == array([2, 3])), "<br>";
        echo var_dump(array([0, 1]) === array([2, 3])), "<br>";
        echo var_dump(array([0, 1]) != array([2, 3])), "<br>";
        echo var_dump(array([0, 1]) !== array([2, 3])), "<br>";
        echo var_dump(array([0, 1]) <> array([2, 3])), "<br>";

    ?>

    <h2>Type</h2>
    <?php
        class MyClass
        {
        }
        
        class NotMyClass
        {
        }
        $a = new MyClass;
        
        var_dump($a instanceof MyClass);
        var_dump($a instanceof NotMyClass);

        // inheritence
        class ParentClass
        {
        }
        
        class MyClass extends ParentClass
        {
        }
        
        $a = new MyClass;
        
        var_dump($a instanceof MyClass);
        var_dump($a instanceof ParentClass);

        // Using instanceof to check if object is not an instanceof a class
        class MyClass
        {
        }
        
        $a = new MyClass;
        var_dump(!($a instanceof stdClass));

        // interfaces

        interface MyInterface
        {
        }
        
        class MyClass implements MyInterface
        {
        }
        
        $a = new MyClass;
        
        var_dump($a instanceof MyClass);
        var_dump($a instanceof MyInterface);
    ?>

    <h2>Functional</h2>
    <?php
        // $result = "Hello World" |> strlen(...); // nanti next update kayaknya
        // echo $result, "<br>";

        $result = strlen("Hello World");
        echo $result, "<br>"
    ?>
</body>
</html>