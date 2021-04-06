# Format
De use cases zullen op twee manieren gerepresenteerd worden; elke use case zal in de vorm van een tabel opgebouwd worden:
| Hier de titel             ||
|-|-|
| Actor             |   Hier de uitvoerende actor   |
| Precondities  	|   Hier de precondities	|
| Trigger       	|   Hier de trigger	|
| Postcondities 	|   Hier de postcondities	|
| Happy path      	|   Hier de happy path	|
| Alternatief       |   Hier een alternatief pad    |
| Notities      	|   Hier eventuelen notities	|  

Ook zullen de use cases in de vorm van UML diagrammen opgebouwd worden:
![Use case](https://www.plantuml.com/plantuml/svg/LP31Ri8m38RlVWghzxx0LA5AsyHzKyNPD6w9A2bo70cqxTtdcZ5ABcdI__lo9srM4Ysd2KlcdZB3n8EYpYXnF2Y6ADnhd1F0ya5fd1YhBU-bn2CB1bB2ShQ94yQ4WNrhRwOAlm1j_8djhxAGov0oLfrJEFwx5lpEFf6zbE38wqVtXel2v4tZme5wtcmylZwW-Qvls0k-NwnRo4_64FDvegjBTymoCW-tkn2bHwKAVW3CE0jssHekySzhLkRJAWDtMrrx33nhYrKXQAs3FVCl "Use case")
# Use cases
## Start test
| Starten van de tests             ||
|-|-|
| Actor             |   Hier de uitvoerende actor   |
| Precondities  	|   De test case classes en de te testen code staan beschikbaar in de huidige directory	|
| Trigger       	|   Het test commando wordt uitgevoerd	|
| Postcondities 	|   De tests zijn uitgevoerd en de commando geeft een display weer met testresultaten	|
| Happy path      	|   1. Test commando wordt aangeroepen <br> 2. Framework doorzoekt files op zoek naar tests <br>3. Framework start database <br>4. Framework vult database met dummy data <br>5. Apps worden opgestart met behulp van docker image webserver <br>6. Tests worden ingeladen <br>7. Test wordt uitgevoerd <br>8. Commando laat testresultaat zien 	|
| Alternatief       |   1. Test commando wordt aangeroepen <br>2. Framework kan geen tests vinden <br>3. Commando laat error bericht zien   |
| Notities      	|   Voor stap 7. "Test wordt uitgevoerd" van happy path, zie [Uitvoeren tests](#Uitvoeren-Tests)	|  
![Uitvoeren tests diagram](../out/Scenarios/StartTests/usecase.svg "Uitvoeren tests diagram")


## Start automatisch testen


## Uitvoeren tests