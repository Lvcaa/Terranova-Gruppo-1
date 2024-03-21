<?php

// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearpay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any required field is empty
    if (!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['ragione-sociale']) && !empty($_POST['partita-iva']) && !empty($_POST['codice-fiscale']) && !empty($_POST['indirizzo']) && !empty($_POST['civico']) && !empty($_POST['cap']) && !empty($_POST['localita']) && !empty($_POST['provincia']) && !empty($_POST['nazione']) && !empty($_POST['numero-telefonico']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        // Prepare the data for insertion (prevent SQL injection)
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

        // Hash the password using bcrypt
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data into the users table
        $sql = "INSERT INTO Utenti (nome, cognome, ragione_sociale, partita_iva, codice_fiscale, indirizzo, civico, cap, localita, provincia, nazione, numero_telefonico, email, password_hash)
        VALUES ('$nome', '$cognome', '$ragione_sociale', '$partita_iva', '$codice_fiscale', '$indirizzo', '$civico', '$cap', '$localita', '$provincia', '$nazione', '$numero_telefonico', '$email', '$password_hash')";

        // Execute the SQL query
        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all the required fields";
    }
}

// Close connection
$conn->close();
?>
