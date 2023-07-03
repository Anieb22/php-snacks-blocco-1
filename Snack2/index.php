<?php
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) <= 3) {
        echo "Accesso negato: il nome deve essere più lungo di 3 caratteri.";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "Accesso negato: l'indirizzo email non è valido.";
    } elseif (!is_numeric($age)) {
        echo "Accesso negato: l'età deve essere un numero.";
    } else {
        echo "Accesso riuscito!";
    }
} else {
    echo "Errore: tutti i campi del form devono essere compilati.";
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Verifica Accesso</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <br>
        <label for="mail">Email:</label>
        <input type="email" name="mail" required>
        <br>
        <label for="age">Età:</label>
        <input type="text" name="age" required>
        <br>
        <input type="submit" value="Verifica Accesso">
    </form>
</body>
</html>
