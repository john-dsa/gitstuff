<!DOCTYPE html>
<!--
string
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP String Test</title>
    </head>
    <body>
        <?php
            $phrase = 'The truth is rarely pure';
            $author = 'Oscar Wilde';
            echo "<p>It is often said that <q>$phrase</q></p>";
            $phrase = $phrase . ' and never simple';
            echo "<p> <q>$phrase</q> <cite>$author</cite> </p>";
        ?>
    </body>
</html>
