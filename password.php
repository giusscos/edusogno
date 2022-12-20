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
        <?php include 'decoration.php'; ?>
        <div class="form_wrapper">
            <h2 class="title">
                Cambia password
            </h2>
            <?php
            include 'db.php';

            if ($_GET['key'] === md5('pippo')) {
                $email = $_GET['email'];

                if (!empty($_POST['password'])) {
                    $password = $_POST['password'];
                    $cryptoPassword = md5($password);

                    $sql = "UPDATE utenti 
                            SET `password`='$cryptoPassword' 
                            WHERE `email`='$email'";
                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='success'>Password aggiornata</p>";
                    } else {
                        echo "<p class='error'>Errore: " . $conn->error . '</p>';
                    }
                }
            }

            ?>
            <form method="POST">
                <input type="hidden" name="key" value="pippo">

                <div class="input_wrapper">
                    <label for="password">
                        Inserisci la password
                    </label>
                    <div class="input_relative">
                        <input type="password" name="password" placeholder="Scrivila qui" id="password" class="input_text">
                        <?php include 'eyeIcon.php'; ?>
                    </div>
                </div>
                <button type="submit" class="btn_submit">
                    Cambia password
                </button>
            </form>
    </main>
</body>

</html>