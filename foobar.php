<?php
session_start();
?>

<html>

<body>
    <!-- 
        'action' is where page goes 
         input's 'name' is what is referenced for POST 
         ex: $_POST['txtName'];
         input's value is what is inside text box
         input/button with type of "submit" to complete form  
    -->

    <form action="foobar_submit.php" method="post">
        <label>Name: </label>
        <input name="txtName" value="" />
        <input type="submit" name="my_form_submit_button" value="submit" />
    </form>
</body>

</html>