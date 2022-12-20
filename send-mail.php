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

        if (!empty($_POST)) {
            $headers = "From: giu.cosenza08@gmail.com";
            $email = $_POST['email'];
            $key = md5('pippo');
        ?>
            <?php
            if (mail($email, 'Reimposta Password', 'http://localhost:8888/edusogno/password.php?key=' . $key . '&' . 'email=' . $email, $headers)) {
            ?>
                <div class="cards_wrapper">
                    <h2 class="title">
                        <?php
                        echo 'Ti abbiamo inviato un link per reimpostare la password alla seguente email: ' . $email;
                        ?>
                    </h2>
                    <a href="https://generator.email/<?= $email ?>" target="_blank" title="Apri la tua casella di posta" class="form_link">
                        Apri la tua casella di posta elettronica 
                    </a>
                </div>
            <?php
            } else {
            ?>
                <div class="cards_wrapper">
                    <h2 class="title">
                        <?php
                        echo '<h1>Email non inviata</h1>';
                        ?>
                    </h2>
                </div>  
        <?php
            }
        }
        ?>
    </main>
</body>

</html>