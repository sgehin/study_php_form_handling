<!DOCTYPE html>
<html>
    <head>
        <title>Default Values</title>
        
    </head>
    <form method="post" action="calc.php">
        <pre>
                  Remarks <textarea name="principle" cols="21" rows="4" wrap="type">type your question here.</textarea>

                  I agree <input type="checkbox" name="agree" value="value" checked="checked">  <!--default checked setting -->
              don't agree <input type="checkbox" name="dontAgree">  <!--no default checked setting -->

        <!-- Submitting multiple values with an array :add [] to name all choice are submitted--> 

                  Vanilla <input type="checkbox" name="ice[]">
                Chocolate <input type="checkbox" name="ice[]">
               Strawberry <input type="checkbox" name="ice[]">
        <!-- To substrac the array use: foreach($ice as $item) echo "$item<br>";--> 

                          <input type="submit" name="submit">
    </form>
           
</html>