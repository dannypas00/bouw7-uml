# Scenarios: Use cases
## Voorbeeld format
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
![Use case](/out/Scenarios/ExampleUseCase/usecase.svg "Use case")

## Start tests
| Starten van de tests             ||
|-|-|
| Actor             |   Hier de uitvoerende actor   |
| Precondities  	|   De test case classes en de te testen code staan beschikbaar in de huidige directory	|
| Trigger       	|   Het test commando wordt uitgevoerd	|
| Postcondities 	|   De tests zijn uitgevoerd en de commando geeft een display weer met testresultaten	|
| Happy path      	|   1. Test commando wordt aangeroepen <br> 2. Framework doorzoekt files op zoek naar tests <br>3. Framework start database <br>4. Framework vult database met dummy data <br>5. Apps worden opgestart met behulp van docker image webserver <br>6. Tests worden ingeladen <br>7. Test wordt uitgevoerd <br>8. Commando laat testresultaat zien 	|
| Alternatief       |   1. Test commando wordt aangeroepen <br>2. Framework kan geen tests vinden <br>3. Commando laat error bericht zien   |
| Notities      	|   Voor stap 7. "Test wordt uitgevoerd" van happy path, zie [Uitvoeren enkele test](#Uitvoeren-enkele-test)	|  

![Uitvoeren tests diagram](/out/Scenarios/StartTests/usecase.svg "Uitvoeren tests diagram")

## Start automatisch testen
| Automatisch testen             ||
|-|-|
| Actor             |   CircleCI software   |
| Precondities  	|   De nieuwe code is naar de github repository gepushed	|
| Trigger       	|   Er is een taak gestart om de functionele tests door CircleCI uit te laten voeren	|
| Postcondities 	|   CircleCI reageert op de testresultaten	|
| Happy path      	|   1. CircleCI krijgt signaal om te starten met testen<br>2. CircleCI container wordt opgebouwd<br>3. Cache van eerdere tests wordt opgehaald<br>4. Tests worden uitgevoerd<br>5. Files worden opgeschoont<br>6. CirlceCI gaat verder met de volgende task	|
| Alternatief       |   1. CircleCI krijgt signaal om te starten met testen<br>2. CircleCI container wordt opgebouwd<br>3. Cache van eerdere tests is niet beschikbaar, deze zal niet gebruikt worden<br>4. Tests worden uitgevoerd<br>5. Files worden opgeschoont<br>6. Cache wordt opgeslagen<br>7. CirlceCI gaat verder met de volgende task   |
| Notities      	|   Voor stap 4. "Test worden uitgevoerd", zie [Start tests](#Start-tests)	|

![Automatisch testen diagram](/out/Scenarios/AutomatedTesting/usecase.svg "Automatisch testen diagram")

## Uitvoeren enkele test
| Uitvoeren enkele test             ||
|-|-|
| Actor             |   Framework   |
| Precondities  	|   De omgeving is opgezet en de functionaliteit [Starten van tests](#start-tests) is doorlopen. Hierbij zijn de database en de backend web-api opgestelt en zijn alle huidige migraties op de database uitgevoerd. Ook is er een te testen test class bekend en meegegeven.	|
| Trigger       	|   Taak [Starten van tests](#start-tests) is afgerond en roept individuele tests aan.	|
| Postcondities 	|   De tests zullen uitgevoerd zijn en een resultaat terug hebben gegeven.	|
| Happy path      	|   1. Test class setup methode wordt uitgevoerd<br>2. Test class wordt doorzocht voor test functie annotaties<br>3. Tests worden uitgevoerd<br>4. Testresultaat wordt asynchroon aan de aanroeper doorgestuurd<br>5. Testclass teardown wordt uitgevoerd<br>6. Volgende test wordt gestart	|
| Alternatief       |   1. Test class setup methode wordt uitgevoerd<br>2. Test class wordt doorzocht voor test functie annotaties<br>3. Tests worden uitgevoerd<br>4. Test loopt tegen een onverwachte error aan<br>5. Geef error door aan aanroeper<br>6. Sla deze test over, ga door naar volgende test    |
| Notities      	|   Deze use case gaat ervanuit dat use case [Starten van tests](#start-tests) al uitgevoerd is.	|  

![Enkele test](/out/Scenarios/IndividualTest/usecase.svg "Enkele test")

# Process view: Activity diagrams
## Executing tests
![Execute tests](/out/Process/ExecuteTestsActivity/Execute%20functional%20tests%20activity%20diagram.svg)

## CircleCI workflow
![CircleCI workflow](/out/Process/WorkflowActivity/Functional%20testing%20workflow%20activity%20diagram.svg)

# Development view: Component diagram
![Component diagram](/out/Development/ComponentDiagram/Component%20diagram.svg)

# Physical view: Deployment diagram
![Deployment diagram](out/Physical/CIDeployment/CircleCI%20Deployment%20Diagram.svg)

# Logical view: Class diagram
![Class diagram](out/Logical/ClassDIagram/Framework%20class%20diagram.svg)