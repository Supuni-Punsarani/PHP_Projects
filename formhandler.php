<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)) {
        header("Location: ../My_First_Form/index.php");
        exit();
    }

    // Output data
    echo "These are submitted data:";
    echo "<br>";
    echo "$firstname";
    echo "<br>";
    echo "$lastname";
    echo "<br>";
    echo "$pet";

    exit();
} else {
    header("Location: ../My_First_Form/index.php");
    exit();
}
