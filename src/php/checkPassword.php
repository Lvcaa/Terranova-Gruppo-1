<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearpay";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

       
        $sql = "SELECT id, nome, cognome, password_hash FROM Utenti WHERE email = '$username'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row["password_hash"];


            if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $username;
                $_SESSION['user_name'] = $row['nome'];
                $_SESSION['user_surname'] = $row['cognome'];
                echo "<script src=../js/cookie.js></script>";
                echo "<script>";
                echo "setCookie('user_info', '{$_SESSION['user_email']}', '{$_SESSION['user_name']}', '{$_SESSION['user_surname']}', 1);";
                echo "window.location.href = 'myProfile.php';";
                echo "</script>";
                exit();
            } else {

                echo "Invalid password";
            }
        } else {
            echo "No User Associated with such email";
        }
    } else {
        echo "Please provide both email and password";
    }
}

$conn->close();
?>
