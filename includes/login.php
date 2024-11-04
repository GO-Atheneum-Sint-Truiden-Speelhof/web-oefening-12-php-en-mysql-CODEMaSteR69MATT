<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database-informatie
    $servername = "localhost";
    $username = "ma";
    $password = "123";
    $dbname = "test";

    // Maak een verbinding met de database
    $com = new mysqli($servername, $username, $password, $dbname);

    // Controleer verbinding
    if ($com->connect_error) {
        die("Verbinding mislukt: " . $com->connect_error);
    }

    // Verkrijg gebruikersinvoer
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    // Wachtwoord hashen voor beveiliging
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    // SQL-query om de gegevens in te voegen
    $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (?, ?)";
    $stmt = $com->prepare($sql);
    $stmt->bind_param("ss", $gebruikersnaam, $hashed_wachtwoord);

    // Controleer of de invoeging is gelukt
    if ($stmt->execute()) {
        echo "Gebruiker succesvol toegevoegd!";
    } else {
        echo "Fout: " . $sql . "<br>" . $com->error;
    }

    // Verbind afsluiten
    $stmt->close();
    $com->close();
}
?>

<!-- HTML Formulier voor inloggen -->
<form method="POST" action="">
    Gebruikersnaam: <input type="text" name="gebruikersnaam" required><br>
    Wachtwoord: <input type="password" name="wachtwoord" required><br>
    <input type="submit" value="Inloggen">
</form>
