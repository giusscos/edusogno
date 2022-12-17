<?php
include 'db.php';

$name = $_POST['nome'];
$surname = $_POST['cognome'];
$email = $_POST['email'];
$password = $_POST['password'];
$cryptoPassword = md5($password);

$sql = "INSERT INTO utenti (nome, cognome, email, password)
VALUES ('$name', '$surname', '$email', '$cryptoPassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>