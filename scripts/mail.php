<?php
// Ontvanger en onderwerp van de e-mail
$ontvanger = 'matt@localhost';  // Vervang dit door een geldig e-mailadres
$onderwerp = 'Inschrijving fotowedstrijd';

// Formuliergegevens veilig ophalen
$naam = $_POST['naam'] ?? '';
$straat = $_POST['straat'] ?? '';
$postcode = $_POST['postcode'] ?? '';
$gemeente = $_POST['gemeente'] ?? '';
$telefoon = $_POST['telefoon'] ?? '';
$email = $_POST['email'] ?? '';
$geboortedatum = $_POST['geboortedatum'] ?? '';  // Gebruik null-coalescent operator
$titel = $_POST['titel'] ?? '';
$camera = $_POST['camera'] ?? '';
$lens = $_POST['lens'] ?? '';
$commentaar = $_POST['commentaar'] ?? '';  // Gebruik null-coalescent operator

// Bericht opbouwen
$bericht = 'Naam: ' . $naam . "\n" .
           'Straat: ' . $straat . "\n" .
           'Gemeente: ' . $postcode . ' ' . $gemeente . "\n" .
           'Telefoonnummer: ' . $telefoon . "\n" .
           'E-mail adres: ' . $email . "\n" .
           'Geboortedatum: ' . $geboortedatum . "\n" .
           'Titel: ' . $titel . "\n" .
           'Camera: ' . $camera . "\n" .
           'Lens: ' . $lens . "\n" .
           'Commentaar: ' . $commentaar;

// Verzender header opbouwen
$verzender = 'From: ' . $naam . ' <' . $email . '>';

// E-mail verzenden
if (mail($ontvanger, $onderwerp, $bericht, $verzender)) {
    echo "E-mail verzenden is mislukt.";
}

// Database invoegen
sql();

function sql() {
    $servername = "localhost";
    $username = "matt";
    $password = "123";
    $dbname = "test";

    // Verbinding maken met de database
    $com = new mysqli($servername, $username, $password, $dbname);

    // Controleer verbinding
    if ($com->connect_error) {
        die("Connection failed: " . $com->connect_error);
    }

    // SQL-query
    $sql = "INSERT INTO wedstrijd (naam, straat, postcode, gemeente, telefoon, `e-mail`, geboortedatum, foto, camera, lens, beschrijving) 
    VALUES ('".$_POST['naam']."','".$_POST['straat']."','".$_POST['postcode']."','".$_POST['gemeente']."',
    '".$_POST['telefoon']."','".$_POST['email']."','".$_POST['geboorte']."','".$_POST['titel']."',
    '".$_POST['camera']."','".$_POST['lens']."','".$_POST['beschrijving']."')";

    echo $sql; // Voor debuggen

    // Voer query uit
    if ($com->query($sql) === TRUE) {
        echo "Nieuwe record is aangemaakt.";
    } else {
        echo "Fout: " . $sql . "<br>" . $com->error;
    }

    // Verbinding sluiten
    $com->close();
}
?>
