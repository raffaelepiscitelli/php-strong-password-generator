<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

<?php

    function generateRandomPassword($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£$%&*#';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

    <header>

        <div class="header-container d-flex flex-column justify-content-center align-items-center mt-5">

            <h1 class="fw-semibold">Strong Password Generator</h1>

            <h2 class="text-white fw-semibold">Genera una password sicura</h2>

        </div>

    </header>

    <main>

        <div class="main-container d-flex flex-column justify-content-center align-items-center">

            <form action="/index.php">

                <label for="password-generator"></label>

                <input class="rounded" type="text" name="password-lenght" id="password-lenght">

            </form>


        </div>

    </main>

</body>

</html>