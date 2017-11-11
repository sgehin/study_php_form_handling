<!DOCTYPE html>
<html>
    <head>
        <title>Default Values</title>
        
    </head>
    <form method="post" action="calc.php">
        <pre><label>
             Vegetables <select name="veg"size="1">    <!-- size = number of line to display -->
                        <option value="Peas">Peas</option>
                        <option value="Carrots">Carrots</option>
                        <option selected="selected" value="Broccoli">Broccoli</option> <!-- selected set default selected item -->                      
                        </select> 

                          <input type="submit" name="submit">

<!-- allowing to select multiple choices-->
    Multiple Vegetables <select name="veg"size="3" multiple="multiple">    <!-- add attribute multiple -->
                        <option value="Peas">Peas</option>
                        <option value="Carrots">Carrots</option>
                        <option selected="selected" value="Broccoli">Broccoli</option> <!-- selected set default selected item -->                      
                        </select> 

                          <input type="submit" name="submit" value="xxx"> <!-- customize text in button -->

                          <input type="image" width="75px" height="20px" name="submit" src="img/AAA.png"> <!-- customize text in button -->
              </label>
        </pre>
    </form>
           
</html>