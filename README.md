# StudyMate
## Uitleg
Je gaat een applicatie maken welke je voortgang van je studie kan bijhouden.

De applicatie bestaat uit drie onderdelen welke een andere focus hebben qua beoordeling. Plus een extra onderdeel om de 10 te halen.
Je maakt de applicatie **in duo's**. Geef je duo partner voor week 3 door aan de docent!
Lukt dat niet dan gaat de docent aan de slag met indelen.

In het menu aan de linkerkant zijn de verschillende onderdelen beschreven. Stel vooral vragen aan de docent om aannames te valideren. Maar het gaat er vooral om dat je zelf een mooi ontwerp maakt. En daarmee bedoelen we niet de visuele uitstraling want daar mag je een CSS framework voor gebruiken zoals bootstrap, bulma, foundation of whatever...

Het grootste leerdoel is om een dynamische webapplicatie te maken met PHP/Laravel. De lessen zijn zo ingedeeld dat je altijd stukjes van je eindopdracht kan maken vanaf week 3. **Begin op tijd!!!!**

### Knockouts

De applicatie moet gebruik maken van Laravel.
Alleen producten waarvan de broncode is ingeleverd via Blackboard, voor de deadline, worden beoordeeld
Bij fouten die normaal gebruik belemmeren wordt het product afgekeurd.
De app moet draaien op je eigen webserver (lokaal of ergens anders) onder een zelfverzonnen url (apache vhost configuratie etc.) met error reporting E_ALL (moet je kunnen aantonen) zodat we de errors kunnen zien.
Je moet tijdens het assessment bruikbare en normale data hebben in je applicatie zodat de gevraagde functionaliteit uitgevoerd kunnen worden. Geen ‘blabla’ of ‘hatsieflats’ data.
Het product bevat, al dan niet volledig, de functionaliteit zoals beschreven. Er is dus altijd een admin omgeving, dashboard en deadline manager.
Je maakt gebruik van PSR1,PSR2 & PSR4 standaarden zodanig dat de code voldoet aan de voorgestelde afspraken van https://www.php-fig.org

### Waarschuwingen:

Gebruik geen packages die bepaalde functionaliteiten zoals hieronder beschreven oplossen. Dan kan je namelijk niet goed aantonen dat je de stof onder de knie hebt.
Heb je een Fatal, Parse of Syntax error, dan scoor je bij dat onderdeel geen punten. Lukt een bepaalde functionaliteit dan niet meer -> KO.
Bij notice en warnings punten aftrek. 
Slechte/verkeerde try catch, punten aftrek.
We gaan voor kwalitatieve code!!

## Admin omgeving
Om alle info bij te houden over je studentenleven op school moet je een omgeving maken om data op te slaan en aan te passen (Create, Read, Update, Delete == CRUD)

Deze omgeving bevat dus informatie die je niet zomaar mag aanpassen. Je moet het afschermen via een rollen/rechten systeem. Er is dus een aparte gebruiker (anders dan die van de Deadline manager) waarmee je moet inloggen. 

We noemen deze omgeving voor het gemak de Admin omgeving omdat het voornamelijk in administratieve taken voorziet.

Gebruik Laravel om een mooi login systeem te maken zodat niet iedereen bij deze omgeving kan.

In deze CRUD omgeving kun je Docenten en Vakken (ook wel Modules genoemd) te beheren. 
Meerdere docenten kunnen een vak geven. Je kan daarbij aangeven van welke docent je les hebt gehad en je kan aangeven wie de coordinator is van het vak.

Een vak heeft ook een toets. Dat kan in de vorm van een tentamen of een assessment. Bij een assessment kan je een .zip bestand uploaden, dit is bijvoorbeeld de code die je hebt ingeleverd en die je ook persoonlijk wil bewaren.

Persoonlijke gegevens van gebruikers/personen worden encrypted in de database opgeslagen

**Beoordeling:**

- 10 punten, Correct gebruik van database (Eloquent)
- 10 punten, Validatie & Encryption
- 10 punten, Unit testing

## Dashboard
Er is een publiek toegankelijk dashboard aanwezig waar je voortgang wordt getoond. Dit dashboard bevat allerlei onderdelen die data laat zien die in de admin omgeving is opgeslagen.

Dit dashboard bevat alle modules die je al gedaan hebt met daarbij behorende cijfer.
Het bevat ook een visuele voortgangs meter
De vakken zijn verdeeld in periodes en daarna in blokken. Dit moet je visueel laten zien. Tip: maak/schets eerst een wireframe van de pagina.
Aantal te behalen en behaalde studie punten zijn per module aangegeven.
Er is ook een samenvatting aanwezig die per blok laat zien hoeveel studiepunten je hebt en totaal.
**Beoordeling:**

- 25 punten, Correct gebruik van Laravel en Blade.

## Deadline manager
Aangezien ieder vak een bepaalde toets heeft moet je een functionaliteit maken waarbij je aan kan geven wanneer de inleverdeadline of tentamen datum is

Deze Deadline manager is dus een aparte functionaliteit die gebruik maakt van de opgeslagen gegevens van het Admin gedeelte.

Let er wel op dat deze functionaliteit persoonlijk is. Je moet dus een login bij deze functionaliteit maken. Dit mag niet dezelfde gebruiker zijn als bij de Admin omgeving! Dus onderzoek de mogelijkheid van een slim rollen en rechten systeem.

**Extra info:**

- De deadlines kan je dan tonen in een lijst zodat het overzichtelijk is wanneer je wat af moet hebben.
- De deadlines hebben een tags: makkelijk, moeilijk, veel werk, weinig werk, leuk, niet leuk, etc.
- De lijst is te sorteren op docent, module, tijdstip en categorie. Sortering gebeurt in de backend!
- De elementen in de lijst kan je afvinken door middel van een check box. Vormgeving zelf te bepalen.


**Beoordeling:**

- 10 punten, Technisch ontwerp van het systeem.
- 10 punten, Dusk implementatie

## Voor de 10
Heb je in ieder geval alle drie de subsystemen gemaakt en heb je een voldoende, dan kan je met de onderstaande opties je punten aanvullen tot maximaal een 10.  

**5 punten:**
Maak gebruik van een QR Code API om het Dashboard te verrijken met een qr code die de url van het dashboard bevat. Hiermee kan iemand die meekijkt snel dezelfde url openen zonder te typen. Of je kan de QR code uitprinten en aan je vrienden geven om te laten zien hoe ver je al met de opleiding bent.



**10 punten:**
Je hebt gebruik gemaakt van verschillende design patterns / Je hebt bepaalde refactoring regels uitgevoerd. (zelf uitleggen)

Deze designpatterns zijn te vinden op refactoring.guru of phpdesignpatterns.



**10 punten:**
Extra functionaliteit zoals bijvoorbeeld: Admin is via social login te bereiken.

