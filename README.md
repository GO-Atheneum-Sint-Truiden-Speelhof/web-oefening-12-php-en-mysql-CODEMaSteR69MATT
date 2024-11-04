[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/v7mJLV8s)
# Web-Php-MySQL-matthew

## Start

Deze repository bevat de beginsituatie van onze dynamische website.

## Opgaves

### Cookies

Zorg ervoor dat het eerste scherm van de website de keuze biedt om cookies te aanvaarden of te weigeren.
Als de gebruiker de cookies weigert wordt die automatisch doorgestuurd naar www.google.com.
Indien hij de cookies accepteert ziet hij de startpagina van onze website.

### Wedstrijdformulier

#### 1. Maken en Uitlezen

We maken een een formulier waarmee deelnemers zich kunnen inschrijven om deel te nemen aan de fotowedstrijd.
Een voorbeeld van zo'n formulier vind je in de powerpoint én cursus in Hoofdstuk 12.

Dit formulier wordt ingelezen door een php-script en de ingevulde waarden worden op het scherm getoond als bevestiging van inschrijving.
Diezelfde gegevens worden via e-mail verzonden naar de organisator van de wedstrijd. We maken hiervoor een test-gebruiker aan op onze localhost via de Mercury mailserver van XAMPP.

#### 2. Bewaren?

Een e-mail sturen voor elke inschrijving is niet zo handig. De mailbox van de organisator raakt snel overvol.
Een betere oplossing is om alle inschrijvingen te bewaren in een databank. We maken dus een MySQL of MariaDB databank aan, met daarin de nodige tabellen en velden voor de komende oefeningen.

Zorg ervoor dat de gegevens die we uitlezen uit het formulier niet meer via e-mail worden verzonden maar wel mooi worden bewaard in de databank. Het bevestigingsbericht blijft wel nog steeds verschijnen op de website.
We gebruiken voor onze verbinding met de databank de [MySQLi-connector](https://www.php.net/manual/en/book.mysqli.php)

#### 3. Uitlezen

We zorgen voor een extra pagina in onze website die een lijst toont van alle inschrijvingen. We halen de inschrijvingen op uit de databank en tonen deze in een responsive tabel.

#### 4. Login?

Uiteraard moet niet iedereen de lijst met inschrijvingen kunnen bekijken. We gaan er dus voor zorgen dat enkel een ingelogde gebruiker deze pagina mag bekijken.

Hiervoor maken we een eenvoudige login-pagina aan. We vragen de gebruiker op aan de databank en controleren of het paswoord correct is.
Is de gebruiker correct ingelogd dan kan hij de lijst de inschrijvingen bekijken, anders krijgt hij een foutmelding en moet hij opnieuw proberen in te loggen.

#### 5. Aanpassen? Verwijderen?

Uiteraard kan een 'admin' ook indien nodig de gegevens aanpassen van een inschrijving, of de inschrijving helemaal verwijderen.
