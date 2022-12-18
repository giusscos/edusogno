<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="content">
        <?php
        include 'decoration.php';
        include 'db.php';

        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cryptoPassword = md5($password);
        }

        $sql = "SELECT * FROM utenti 
                WHERE email = '$email'
                AND password = '$cryptoPassword' ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"] . " - Name: " . $row["nome"] . " " . $row["cognome"] . "<br>";
        ?>
                <div class="form_wrapper">
                    <h2 class="title">
                        Ciao <span class="capitalize"><?= $row["nome"] . ' ' . $row['cognome']; ?></span> ecco i tuoi eventi
                    </h2>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="form_wrapper">
                <h2 class="title">
                    Qualcosa &eacute; andato storto😢
                </h2>
                <a href="/edusogno/" class="form_link" title="Torna alla pagina di login">
                    Riprova ad effettuare l'Accesso
                </a>
                <a href="/edusogno/register.php" class="form_link" title="Vai alla pagina di registrazione">
                    Non hai ancora un account? Registrati
                </a>
            </div>
        <?php
        }
        $conn->close();
        ?>
    </main>
</body>

</html>