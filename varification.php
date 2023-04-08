<?php
            $error_msg = '';
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $conn = mysqli_connect("localhost", "root", "", "assignment2");
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    header("Location: dashboard.php");
                    exit();
                } else {
                    $error_msg = 'Invalid user information. Please try again.';
                }
                mysqli_close($conn);
            }
?>