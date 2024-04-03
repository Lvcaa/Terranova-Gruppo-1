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

    if (!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['ragione-sociale']) && !empty($_POST['partita-iva']) && !empty($_POST['codice-fiscale']) && !empty($_POST['indirizzo']) && !empty($_POST['civico']) && !empty($_POST['cap']) && !empty($_POST['localita']) && !empty($_POST['provincia']) && !empty($_POST['nazione']) && !empty($_POST['numero-telefonico']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $nome = $conn->real_escape_string($_POST['nome']);
        $cognome = $conn->real_escape_string($_POST['cognome']);
        $ragione_sociale = $conn->real_escape_string($_POST['ragione-sociale']);
        $partita_iva = $conn->real_escape_string($_POST['partita-iva']);
        $codice_fiscale = $conn->real_escape_string($_POST['codice-fiscale']);
        $indirizzo = $conn->real_escape_string($_POST['indirizzo']);
        $civico = $conn->real_escape_string($_POST['civico']);
        $cap = $conn->real_escape_string($_POST['cap']);
        $localita = $conn->real_escape_string($_POST['localita']);
        $provincia = $conn->real_escape_string($_POST['provincia']);
        $nazione = $conn->real_escape_string($_POST['nazione']);
        $numero_telefonico = $conn->real_escape_string($_POST['numero-telefonico']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Utenti (nome, cognome, ragione_sociale, partita_iva, codice_fiscale, indirizzo, civico, cap, localita, provincia, nazione, numero_telefonico, email, password_hash)
        VALUES ('$nome', '$cognome', '$ragione_sociale', '$partita_iva', '$codice_fiscale', '$indirizzo', '$civico', '$cap', '$localita', '$provincia', '$nazione', '$numero_telefonico', '$email', '$password_hash')";

        if ($conn->query($sql) === TRUE) {
            header("Location: myProfile.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all the required fields";
    }
}

$conn->close();
?>
