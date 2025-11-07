<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Variables and Constants</title>
</head>
<body>
    <h1>3. Variables and Constants</h1>
    <p><a href="/">Go back</a></p>
    <?php
        // valid variable names
        $var = "Bob";
        $Var = "Joe";
        $_var = "Udin";

        echo $var, "<br>";
        echo $Var, "<br>";
        echo $_var, "<br>";

        // invalid variable
        // $4var = "foo"

        // obscure variable name
        ${"invalid-name"} = "bar";
        $name =  "invalid-name";
        echo ${"invalid-name"}, " " ,$$name, "<br>";

        // predefined variable
        // php contains a lot of predefined variable
        // example
        echo var_dump($GLOBALS), "<br><br>";
        echo var_dump($_GET), "<br><br>";
        echo var_dump($_SERVER), "<br><br>";


        // variable scope
        // global variable
        $a = 1;

        function test() {
            // local scope
            echo "a is ", $a, "<br>"; // Variable $a is undefined as it refers to a local version of $a
        };


        function testFix () {
            global $a; 
            echo "a is ", $a, "<br>";
        }

        test();
        testFix();


        // variable variables
        $b = "hello";
        $$b = "world!";

        echo $b, " ", $$b, "<br>";

        // same as
        echo $b, " ", $hello, "<br>";

        // constants
        // Valid constant names
        define("FOO",     "something");
        define("FOO2",    "something else");
        define("FOO_BAR", "something more");

        // Invalid constant names
        define("2FOO",    "something");

        // This is valid, but should be avoided:
        // PHP may one day provide a magical constant
        // that will break your script
        define("__FOO__", "something"); 
        echo FOO, "<br>";

    ?>
</body>
</html>