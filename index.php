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
        <div class="container">
            <div class="form_wrapper">
                <h2 class="title">
                    Crea il tuo account
                </h2>
                <form action="" method="POST">
                    <div class="input_wrapper">
                        <label for="name">
                            Inserisci il nome
                        </label>
                        <input type="text" name="name" placeholder="Mario" id="name" class="input_text">
                    </div>
                    <div class="input_wrapper">
                        <label for="surname">
                            Inserisci il cognome
                        </label>
                        <input type="text" name="surname" placeholder="Rossi" id="surname" class="input_text">
                    </div>
                    <div class="input_wrapper">
                        <label for="email">
                            Inserisci l'email
                        </label>
                        <input type="email" name="email" placeholder="name@example.com" id="email" class="input_text">
                    </div>
                    <div class="input_wrapper">
                        <label for="password">
                            Inserisci la password
                        </label>
                        <input type="password" name="password" placeholder="Scrivila qui" id="password" class="input_text">
                    </div>
                    <button type="submit" class="btn_submit">
                        Registrati
                    </button>
                    <a href="#" class="form_link">
                        Hai già un account? <span class="evidence">Accedi</span>
                    </a>
                </form>
            </div>
        </div>
        <?php include 'decoration.php'; ?>
    </main>
</body>

</html>