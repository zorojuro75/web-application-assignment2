<?php 
    include  "connection.php";
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pet = $_POST["pet"];
        $problem = $_POST["problem"];
    }
    $sql = "INSERT INTO helpdesk (name, email, pet,  problem, time) VALUES ('$name', '$email', '$pet', '$problem', current_timestamp());";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>