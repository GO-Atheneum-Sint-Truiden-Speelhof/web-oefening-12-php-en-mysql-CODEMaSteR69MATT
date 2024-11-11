# Feedback #
## De opdrachten ##
| Opdracht | Goed (5) | Voldoende (3) | Onvoldoende (1) | Niet gemaakt (0) | Score (35) |
| :------- | :---: | :---------: | :-----------: | :----: |---:|
| De leerling voorziet een startpagina waar de gebruiker moet akkoord gaan met het gebruik van cookies. De leerling start een cookie. | X | | | |5|
| De leerling maakt een inschrijvingsformulier en kan dit uitlezen.  | X | | | |5|
| De leerling bewaart de gegevens in een databank.  | X | | | |5|
| De leerling kan de gegevens uitlezen uit de databank en tonen in een tabel of lijst.  | X | | | |5|
| De leerling voorziet een loginpagina die een gebruiker en paswoord controleert in de databank. | X | | | |5|
| De leerling voorziet paswoord-hashing om het paswoord veilig te bewaren.  | | | | X |0|
| De leerling zorgt dat enkel een ingelogde persoon de lijst met gegevens kan bekijken. | | X | | |3|
| | | | | | 28|


## Algemene feedback ##
* confirm.php en mail.php: Je leest de gegevens in in beide bestanden en stuur telkens (2x dus) een mail. ( -1 )
* login.php (19 - 20): input escapen tegen SQL-injectie. Waar heb je die info gevonden? ( + 1 )
* login.php (32): Werkt, maar niet echt proper om zo maar een function te stoppen. Je kan dit oplossen met een proper if-statement. ( -1 )
* login.php (82): Het 'endif' statement is verouderd sinds php 4.0.0. Dus niet meer gebruiken! We gebruiken accolades { } om codeblokken te onderscheiden. ( - 1 )
* login.php (86): Waarom staat je logout-code hier ook nog?
* login.php (vanaf 96): CSS-styling in een php-bestand? NOOIT! ( -2 )

## Resultaat ##
Je maakte een mooie versie van de gevraagde website. Dit was geen eenvoudige oefening, goed gedaan!
Terwijl er zeker nog werk is aan het proper programmeren en het goed structureren van je programma-code is dit een goed resultaat.
Probeer voor volgende oefeningen je code goed te scheiden afhankelijk van de functionaliteit, en geen talen door elkaar te schrijven. HTML, CSS, JavaScript, PHP horen zoveel mogelijk in hun eigen bestanden te staan.

Je haalde uiteindelijk een score van __24 / 35__
