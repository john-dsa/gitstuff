<!DOCTYPE html>
<!--
array iterations
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array</title>
    </head>
    <body>
        <?php
        $days = array('monday', 'tuesday', 'wedesday');
        foreach ($days as $key => $value) {
            echo "<p>&bull; The key is $key and the value is $value</p>";
        }
        
        ?>
    </body>
</html>
