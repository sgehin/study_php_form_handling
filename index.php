<!DOCTYPE html>
<html>
    <head>
        <title>Default Values</title>
        
    </head>
    <form method="post" action="calc.php">
        <pre>
                 yello <input type="radio" name="color" value="1">
                   red <input type="radio" name="color" value="2">
                 green <input type="radio" name="color" value="3" checked="checked">

                          <input type="submit" name="submit">
<!-- hidden fields 
  echo '<input type="hidden" name="submitted" value="yes">'

to check:

if(isset($_post['submitted'])){}
-->

    </form>
           
</html>