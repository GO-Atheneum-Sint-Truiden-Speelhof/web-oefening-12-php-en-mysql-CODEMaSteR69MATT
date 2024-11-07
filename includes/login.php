<?php
function checkLoginAndFetchMatch() {
    $servername = "localhost";
    $username = "matt";
    $password = "123";
    $dbname = "test";

    // Verbinding maken met de database
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize user input to prevent SQL injection
    $gebruikersnaam = $conn->real_escape_string($_POST['gebruikersnaam']);
    $wachtwoord = $conn->real_escape_string($_POST['wachtwoord']);

    // Check if the login exists
    $sql = "SELECT * FROM gebruikersnaam WHERE gebruikersnaam = '$gebruikersnaam' AND wachtwoord = '$wachtwoord'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login is correct, fetch and display all data from the wedstrijd table
        $wedstrijdSql = "SELECT * FROM wedstrijd";
        $wedstrijdResult = $conn->query($wedstrijdSql);

        if ($wedstrijdResult->num_rows > 0) {
            // Display all columns from each row in the wedstrijd table
            while ($row = $wedstrijdResult->fetch_assoc()) {
                foreach ($row as $columnName => $columnValue) {
                    echo ucfirst($columnName) . ": " . (isset($columnValue) ? $columnValue : 'Geen data beschikbaar') . "<br>";
                }
                echo "<hr>";
            }
        } else {
            echo "Geen wedstrijdgegevens gevonden.";
        }
    } else {
        echo "Onjuiste gebruikersnaam of wachtwoord.";
    }

    // Verbinding sluiten
    $conn->close();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    checkLoginAndFetchMatch();
}
?>

<!-- HTML Form for user login -->
<form method="POST" action="">
    Gebruikersnaam: <input type="text" name="gebruikersnaam" required><br>
    Wachtwoord: <input type="password" name="wachtwoord" required><br>
    <input type="submit" value="Login">
</form>
