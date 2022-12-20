<?php
include 'db.php';

$name = $password = $email = $password = $cryptoPassword = '';

$name = $_POST['nome'];
$surname = $_POST['cognome'];
$email = $_POST['email'];
$password = $_POST['password'];
$cryptoPassword = md5($password);

if (!empty($email)) {
    $is_unique = "SELECT * FROM `utenti` 
            WHERE `email` = '$email'";

    $result = $conn->query($is_unique);

    if ($result->num_rows === 0) {
        $sql = "INSERT INTO utenti (nome, cognome, email, password)
                VALUES ('$name', '$surname', '$email', '$cryptoPassword')";

        if ($conn->query($sql) === TRUE) {
            $name = $password = $email = $password = $cryptoPassword = '';
            echo 'Success';
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo $email . ' già presente';
    }
} else {
    echo 'Tutti i campi sono obbligatori';
}

$conn->close();
