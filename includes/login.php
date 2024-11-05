<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "matt";
    $password = "123"; // Replace with the actual password
    $dbname = "test";

    // Create a new database connection
    $com = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($com->connect_error) {
        die("Verbinding mislukt: " . $com->connect_error);
    }

    // Get user input
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    // Hash the password for security
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    // SQL query to insert the data
    $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (?, ?)";
    $stmt = $com->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $gebruikersnaam, $hashed_wachtwoord);

        // Execute and check if the insertion was successful
        if ($stmt->execute()) {
            echo "Gebruiker succesvol toegevoegd!";
        } else {
            echo "Fout bij toevoegen gebruiker: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Fout bij het voorbereiden van de statement: " . $com->error;
    }

    // Close connection
    $com->close();
}
?>

<!-- HTML Form for user registration -->
<form method="POST" action="">
    Gebruikersnaam: <input type="text" name="gebruikersnaam" required><br>
    Wachtwoord: <input type="password" name="wachtwoord" required><br>
    <input type="submit" value="Registreer">
</form>
