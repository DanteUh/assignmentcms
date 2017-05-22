
# Bloggbygge


Av: Andreas Engström, Dante Ulinder och Anna Hallgren-Gribbe
Kurs: CMS, PHP & MySQL 
FEND 16

[Instruktioner](https://github.com/FEND16/cms-php-mysql/blob/master/group_assignment_simple_cms.md)


## Kort beskrivning av bloggen och dess funktionalitet

Vi har i denna uppgift byggt ett enklare CMS i PHP och MySQL. CMSet har följande funktioner:

* En användare kan registrera sig som ny användare
* Användaren kan logga in
* Användaren kan logga ut
* Användaren kan skapa egna blogginlägg
* Användaren kan gilla andras blogginlägg en gång, samt avgilla dem.
* En vanlig användare kan ta bort och uppdatera sina egna blogginlägg
* En användare i rollen som admin kan´även ta bort samtliga blogginlägg, men inte ändra andras.
* Det finns även möjlighet att filtrera fram sina egna blogginlägg.
* Samtlig funktionalitet är error-hanterad utifrån de error som kan uppstå. 


## Struktur av bloggbygget

Vi har främst arbetat objektorienterat, där fokus legat på att skapa funktioner i klasser uppdelade på användare, posts och likes. I Users-klassen har vi t ex samlat funktionerna som hanterar inloggning och registrering av en ny användare, medan funktionerna som lägger till, tar bort och uppdaterar blogginlägg ligger samlade i Posts-klassen. Strukturen vi valt fungerar som ett designmönster, lite utifrån samma tänk som de designmönster vi utformade i JavaScript 2-kursen, där vi endast kallar på dem när vi skapar nya pdo-objekt och ska göra något med varje specifik funktion. 

Vi har skapat en filstruktur som delar upp dataflödet i den del som användaren ser utåt, den del som länkar datan utåt med det som sker i databasen samt en backend-del som sköter hanteringen av datan i databasen. Strukturen utgår alltså till stor del från Model-View-Controller modellen för att skapa ordning bland filerna.


## Använda verktyg/teknologier

| Område        	| Verktyg       |
| ---------------- 	|:-------------:|
| Språk         	| PHP, MySQL    | 
| Ramverk       	| Bootstrap     | 
| Versionshantering | Github        | 
| Kommunikation     | Trello, Slack | 
| Mockups		    | Photoshop     |  




## Saker att eventuellt vidareutveckla i koden

* Lägga till möjlighet för användaren att kommentera
* Lägga till en funktion som räknar likes
* Lägga till en funktion som laddar upp bilder
* Lite mer fördjupad error-hantering





