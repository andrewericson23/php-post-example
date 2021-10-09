<html>

<body>

    <?php
    $name = $_POST['txtName'];

    if (preg_match('~[0-9]+~', $name)) {
        echo '<form action="foobar_submit.php" method="post">
                <label>Name: </label>
                <input name="txtName" value=' . $name . ' />
                <input type="submit" name="my_form_submit_button" value="submit" />
                </form>';
        echo "<p style='color: red'> Name cannot contain numbers </p>";
    } else {
        echo $_POST['txtName'];
        echo "<br><br>";
        print_r($_POST);
    }
    ?>

</body>

</html>