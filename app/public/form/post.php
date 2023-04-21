<h3> Post Method </h3>
<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    echo "Name is " . $name . " and Password is " . $password . "<br/>";

    if ($name === "mg mg" && $password === "1234") {
        echo "Login Success";
    } else {
        echo "Login Failed";
    }
?>