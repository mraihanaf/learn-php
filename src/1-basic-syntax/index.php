<p><a href="/">Go back</a></p>
<p>This is a html paragraph</p>
<?php
    echo "Hello World!\n";
    $expression = true;
    // this is a comment

    /*
        this 
        is
        a multi0line
        comment
    */
?>

<?php if ($expression == true): ?>
    <p>This will show if the expression is true.</p>
<?php else: ?>
    <p>Otherwise, this will show.</p>
<?php endif; ?>


<?php
    echo "This is a test\n";
?>

<p><?php echo "This is a test\n" ?></p>

<p><?php echo "We omitted the last closing tag\n";?></p>