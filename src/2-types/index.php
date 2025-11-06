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
        is_null($a_null);
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

        // delete the whole elements
        $arrExample = array("foo", "bar", "hello", "world!");
        
        echo var_dump($arrExample), "<br>";
        foreach ($arrExample as $i => $value){
            unset($arrExample[$i]);
        }

        echo var_dump($arrExample), "<br>";

        // array destructuring

        $source_array = ['foo', 'bar', 'baz'];
        [$foo, $bar, $baz] = $source_array;

        echo $foo, "<br>";
        echo $bar, "<br>";
        echo $baz, "<br>";
        
        // array destructuing using foreach

        $source_array = [
            [1, 'John'],
            [2, 'Jane']
        ];

        foreach ($source_array as [$id, $name]) {
            echo "{$id}: '{$name}' <br>";
        }

        // ignoring elements

        $source_array = ['foo', 'bar', 'baz'];
        [, , $baz] = $source_array;

        echo $baz, "<br>";

        // destructuring associative arrays
        $source_array = ['foo' => 1, 'bar' => 2, 'jazz' => 3];
        ['jazz' => $three] = $source_array;

        echo $three, "<br>";
        
        $source_array = ['foo', 'bar', 'jazz'];
        [2 => $baz] = $source_array;
        echo $baz, "<br>";

        // swapping two variables
        $a = 1;
        $b = 2;

        [$b, $a] = [$a, $b];
        echo $a, "<br>";
        echo $b, "<br>";

        // array unpacking
        $arr1 = [1,2,3];
        $arr2 = [...$arr1];

        echo var_dump($arr2), "<br>";
        
        /*
            Note: 
            Prior to PHP 8.1, unpacking an array which has a string key is not supported: 
        */

        // array as map

        $map = [
            'version'       => 4,
            'OS'            => 'Linux',
            'lang'          => 'english',
            'short_tags'    => true
        ];

        // array as collection
        
        $colors = ['red', 'green', 'blue'];

        foreach($colors as $color){
            echo $color, "<br>";
        } 

        foreach($colors as $color){
            $color = mb_strtoupper($color);
            echo $color, "<br>";
        }

        unset($color);
        
        // sorting an array

        $sort_example = [3,1,2];
        sort($sort_example);
        echo var_dump($sort_example), "<br>";

        // recursive and multi dimensional array

        $fruits = array(
            "fruits" => array(
                "a" => "orange",
                "b" => "banana",
                "c" => "apple"
            ),
            "numbers" => array (1,2,3,4,5,6),
            "holes" => array(
                "first",
                5 => "second",
                "third"
            )
            
        );

        echo var_dump($fruits), "<br><br>";

        // array copying
        $arr1 = array(2, 3);
        $arr2 = $arr1;
        $arr2[] = 4; // $arr2 is changed,
        // $arr1 is still array(2, 3)

        // reference
        $arr3 = &$arr1;
        $arr3[] = 4; // now $arr1 and $arr3 are the same

        echo var_dump($arr1, $arr2, $arr3), "<br>";

    ?>

    <h2>Object</h2>

    <?php
        class foo {
            function do_foo(){
                echo "do foo";
            }
        }

        $bar = new foo;
        $bar->do_foo()
    ?>

    <h2>Enum</h2>
    <?php
        enum Suit: string {
            case Hearts = "hearts";
            case Diamonds = "diamonds";
            case Clubs = "clubs";
            case Spades = "spades";
        }

        function do_stuff(Suit $s){
            echo $s->name, " : ", $s->value, "<br>";
        }

        do_stuff(Suit::Spades);
    ?>

    <h2>Callable (Callback) and void</h2>
    <?php
        function foo(callable $cb): void {
            $cb();
        }

        foo(function(){
            echo "Hello world!", "<br>";
        })
    ?>

    <h2>Iterables</h2>
    <?php
        function gen(): iterable {
            yield 1;
            yield 2;
            yield 3;
        }

        foreach(gen() as $value){
            echo $value, "<br>";
        }
    ?>

    <h2>Type declarations</h2>
    <?php
        function test(string $param): string {
            return "yeyes";
        }

        $str = "yey";

        function rfrTest(string &$must_be_rfr): string {
            return "rfryes";
        }

        function optionalParamExample(?string $optional_param = null): string {
            return "optionalExample";
        }

        echo test("test"), "<br>";
        echo rfrTest($str), "<br>";
        echo optionalParamExample(), "<br>";
    ?>
</body>
</html>