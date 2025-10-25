<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Types</title>
</head>
<body>
    <h1>2. Types</h1>
    <p><a href="/">Go back</a></p>
    <ul>
        <li>null</li>
        <li>bool</li>
        <li>int</li>
        <li>float</li>
        <li>string</li>
        <li>array</li>
        <li>object</li>
        <li>callable</li>
        <li>resource</li>
    </ul>

    <?php
        $a_bool = true;
        $a_str = "foo";
        $a_str2 = 'foo';
        $an_int = 1234;
        $an_big_int = 1_000_000;

        echo get_debug_type($a_bool), "\n";
        echo get_debug_type($a_str), "\n";

        $a_null = null;
        is_null($A_null);
        $a_true_bool = true;
        $a_false_bool = false;
    ?>
        <br>
        <h2>Integer</h2>
    <?php

        // integer division

        echo var_dump(25/2), "\n";
        echo var_dump(round(25/7)), "\n";

        // convert to integer
        
        echo intval("1"), "\n";

        
        $an_float = 3.14;

    ?>

    <br>
    <
        /*
             A string literal can be specified in four different ways:
                
                - single quoted
                - double quoted
                - heredoc syntax
                - nowdoc syntax

        */

        // single quoted
        // special character will not expanded

        echo 'hello\n';
        
        // double qouted
        $name = "rai";
        echo "hello \"$rai\"\n";
        
        // heredoc
        
        echo <<<END
        hello here s a heredoc
        example \n
        END;

        // nowdoc

        echo <<<'EOD'
            Example of string spanning multiple lines
            using nowdoc syntax. Backslashes are always treated literally,
            e.g. \\ and \'.
        EOD;
    ?>
    <br>
    <h2>Array</h2>

    <?php
        // array

        // An array in PHP is actually an ordered map
        // The key can either be an int or a string. The value can be of any type

        $a_array = [
            "foo" => "bar",
            "bar" => "foo",
            1 => "a",
            0 => "test"
        ];

        echo $a_array[0], "<br>", $a_array[1], "<br>", $a_array["foo"], "<br>";

        // indexed array without keys
        
        $a_indexed_array = array("foo", "bar", "hello", "world");
        echo var_dump($a_indexed_array), "<br>";

        // another example

        $arr = array(
            "foo",
            "bar",
            6 => "hello",
            "world"
        );

        echo var_dump($arr), "<br>";

        // complex type casting

        // this looking very disgusting fr

        $array = array(
            1    => 'a',
            '1'  => 'b', // the value "a" will be overwritten by "b"
            1.5  => 'c', // the value "b" will be overwritten by "c"
            -1 => 'd',
            '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
            '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
            true => 'g', // the value "c" will be overwritten by "g"
            false => 'h',
            '' => 'i',
            null => 'j', // the value "i" will be overwritten by "j"
            'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
            2 => 'l', // the value "k" will be overwritten by "l"
        );

        echo var_dump($array), "<br>";

        // negative index example
        $negative_index_array = [];
        $negative_index_array[-5] = "foo";
        $negative_index_array[] = "bar";

        echo var_dump($negative_index_array), "<br>";

        // multi dimensional array
        $multi_dimensional_array = [
            "multi" => [
                "foo" => "bar"
            ],
            "bar" => "foo"
        ];

        echo var_dump($multi_dimensional_array), "<br>";

        // array deferencing
        
        function getArray() {
            return array(1,2,3);
        }

        $secondElement = getArray()[1];
        
        echo $secondElement, "<br>";

        // using square brackets with array

        $arrExample = [
            1 => "foo",
            5 => "bar"
        ];

        // last n + 1
        // so index 6
        $arrExample[] = "bar";
        
        echo var_dump($arrExample), "<br>";

        // delete single element

        unset($arrExample[1]);
        echo var_dump($arrExample), "<br>";       
        
        // delete the whole array

        unset($arrExample);
        echo var_dump($arrExample), "<br>";
    ?>

</body>
</html>