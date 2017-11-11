<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php // formtest.php
if (isset($_post['name'])) $name = $_post['name'];
else $name = "(Not entered)";

echo <<<_END
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        Your name is: $name<br>
        <form action=formtest.php method="post">
            what is your name?
            <input type="text" name="name">
            <input type="submit">
        </form>
    </body>
</html>
_END;
?>

<!--//if(true){}else{}

//if () $name=jojo; else$name="(not jojo)"