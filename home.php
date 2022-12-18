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

        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cryptoPassword = md5($password);


            $sql = "SELECT * FROM `utenti` 
                    WHERE `email` = '$email'
                    AND `password` = '$cryptoPassword' ";

            $sqlEvents = "SELECT * FROM `eventi` 
                        WHERE `attendees` LIKE '%$email%'";

            $result = $conn->query($sql);
            $resultEvents = $conn->query($sqlEvents);


            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
        ?>
                    <div class="cards_wrapper">
                        <h2 class="title">
                            Ciao <span class="capitalize"><?= $row["nome"] . ' ' . $row['cognome']; ?></span> ecco i tuoi eventi
                        </h2>
                        <div class="cards_grid">
                            <?php
                            if ($resultEvents->num_rows > 0) {
                                // output data of each row
                                while ($rowEvents = $resultEvents->fetch_assoc()) {
                            ?>
                                    <div class="card">
                                        <h3 class="card_title">
                                            <?= $rowEvents['nome_evento']; ?>
                                        </h3>
                                        <span class="card_date">
                                            <?= $rowEvents['data_evento']; ?>
                                        </span>
                                        <button class="btn_submit" title="Unisciti all'evento">
                                            Join
                                        </button>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <div class="card_wrapper">
                                    <h3 class="card_title">
                                        Non hai eventi
                                    </h3>
                                </div>
                        </div>
                <?php
                            }
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