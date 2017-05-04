# Assignment - Simple CMS :notebook:
###### Gruppuppgift: max 3 personer

## Kravspecifikation

Ni ska skapa en blogg eller bloggliknande applikation skriven i __PHP__ och __MySQL__ som fungerar som ett mindre _CMS_ där man kan lägga till, redigera och ta bort innehåll. Man ska även kunna rösta eller gilla innehållet i er applikation.

**Man ska kunna:**
* Lägga till nya _posts_, en _post_ kan vara ett blogginlägg, artikel eller liknande.
* Ni har en sida där man kan se alla _posts_ samt kunna se när innehållet är skapat och av vem innehållet är skapat.
* Ta bort samt redigera existerande _posts_.
* Logga in och logga ut med olika användare som har olika roller.
    - Det ska finnas minst två roller: __admin__ och vanlig användare.
    - Man ska __inte__ kunna regga sig med samma användarnamn eller email flera gånger.
* Bara den användaren som har skapat en viss _post_ kan redigera eller ta bort den. Alternativt så kan man ta bort den om man har admin-rättigheter.
* En användare ska kunna _gilla_ eller på något sätt rösta på varje _post_.
    - En användare ska __inte__ kunna rösta på samma _post_ flera gånger.
    - En användare ska kunna ta bort sin röst från en _post_.


#### Tekniska krav för G

* Ni uppfyller samtliga krav i kravspecifikationen ovan.
* Ni använder er utav **PHP** för att skriva backend-koden och **MySQL** som databas.
* Ni får använda er utav _JavaScript_ för viss funktionalitet men det mesta ska kunna skötas via _PHP_.
* Ni för loggbok, *Trello* eller på något sätt dokumenterar vilka delar av projektet ni har jobbat med.
* Ni versionshanterar med `git`. Detta är viktigt eftersom det är ett grupprojekt men ni examineras individuellt. Detta betyder att jag kommer att använda er loggbok samt `git` för att se över hur ni har bidragit till projektet.
* Ni skriver en `README.md` med alla den relevanta dokumentation som behövs till projektet. Tänk på dokumentationen som ni gjorde till AJAX-projektet och använd liknande struktur i er `README.md`.
* Frontend-delen ska vara användarvänlig och responsiv. Projektet ska kunna fungera som en färdig produkt.

#### Tekniska krav för VG

* Ni jobbar till största del objektorienterad i ert projekt.
* Ni använder er utav *Dependency Injection*.
* Varje medlem i gruppen ska göra minst ett `AJAX`-anrop någonstans i er applikation för att kalla på PHP-sidor som sköter uppdatering av innehåll. Ni kallar på en PHP-sida men uppdatering av innehållet sker dynamiskt med JavaScript.

## Inlämning

_Betygskala:_ __IG/G/VG__

Betyget är baserat på dels projektet som ni lämnar in men också på er dokumentation och hur mycket ni har bidragit till projektet. Detta ska man kunna utläsa från er dokumentation samt versionshantering.

Lämnas in senast: __24/5 23:55__

Lämnas in via studentportalen enligt följande mönster:

`gruppnamn_simple_cms.zip`

Inlämningen ska vara i **.zip** samt inte innehålla några __node_modules__.

__Inlämningen ska även innehålla er exporterade databas.__
