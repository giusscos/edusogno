<?php
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];
$cryptoPassword = md5($password);

$sql = "SELECT * FROM utenti 
WHERE email = '$email'
AND password = '$cryptoPassword' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["cognome"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>