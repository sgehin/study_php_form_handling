<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php // formtest.php
echo <<<_END
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="formtest.php" method="post">
            what is your name?
            <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>
_END;
?>

