# PHPUnit akijken
Dit document beschrijft de structuur van het PHPUnit framework.
## File structuur
[/src](https://github.com/sebastianbergmann/phpunit/tree/master/src) - Alle code die het framework zelf laat werken  
[/src/Framework](https://github.com/sebastianbergmann/phpunit/tree/master/src/Framework) - Bevat alle classes die aangeroepen kunnen worden wanneer phpunit gebruikt wordt (Asserts, Constraints, TestCase, etc.)  
[/src/Runner](https://github.com/sebastianbergmann/phpunit/tree/master/src/Runner) - Bevat de verschillende manieren waarop phpunit aangeroepen kan worden (code coverage, cached, etc.)  
[/src/TextUI](https://github.com/sebastianbergmann/phpunit/tree/master/src/TextUI) - Bevat de code die gebruikt wordt om de CLI UI te presenteren    
[/src/Util](https://github.com/sebastianbergmann/phpunit/tree/master/src/Util) - Bevat verscheidene utilities die gebruikt worden door phpunit (color, exception en filesystem classes, etc.)
## TestRunner
De [/src/Framework/TestRunner.php](https://github.com/sebastianbergmann/phpunit/blob/master/src/Framework/TestRunner.php) test runner is een klasse die aangeroepen wordt wanneer er een test uitgevoerd moet worden op een TestClass-extending klasse.

<details>
<summary>TestRunner UML class</summary>

![object](https://www.plantuml.com/plantuml/svg/RK-x3eCm3Dpv2WyCeFOBEY6XgkfMbOuiIV10bJh8TlZ-cZw4gEh5rjtvV6v47Mj-H4Z-Za6B49q8t53qcecGYtM40-o0CrKBr3f1ADMc_LkDagD2oQzUctPEu_1d-qmTJewTueLJG96g9x3wDLtHhVMNyIb5mp8TIKV6TiczvIPRG9xn59DtiLCxsLFz2TOW3VRs4m00 "object")
</details>
  
De `run` functie voert een aangeleverde `TestCase` uit en gebruikt hierbij het `TestResult` object dat mee gegeven wordt. Dit object fungeert voornamelijk als configuratie voor de `TestCase`, en heeft start een listener voor het resultaat van de `Test`.

## TestResult
Een [/src/Framework/TestResult](https://github.com/sebastianbergmann/phpunit/blob/master/src/Framework/TestRunner.php) klasse bevat verschillende functies en variabelen die gebruikt kunnen worden om controle uit te oefenen over het uitvoeren van tests. Ook is deze klasse verantwoordelijk voor het toevoegen van listeners aan `Test` objecten.

<details>
<summary>TestResult UML class</summary>

![TestRunner](https://www.plantuml.com/plantuml/svg/dLTDRzim3BttL_YOOHtGNNOeCA1Pqc01sWP8ClGmxA3OJA9LbWnzjEk_doJBYPDOjDnR73q-aX95FjqfJQGs9RlA6L4gMuFIIr26wQkhu-_iDlkI4Id9UrPP51JPz-pt7mpWbYQE4LGdTYC4ot8Z9N3jbbQ6QfWHoZptbZ05tVGWfP0AyR-r94O21daZabE-mo1Sw7bPCIXjV6YwaggNTsHTlT2gGXaOLHeuH9AYN6VISFUl0zoShs-P83hJj8IkrNgR1Ny5gQTGISY9feAhjRZ_bqFbVrixBGrWflT-qmSQFGbDSnXgzHpE9jLCQL75AkO0M72VGG9kLbTF0Z84YY8tiDAIvdgy4SQNkLhlYPuAkpNkQypVzRxcYEPtGh4mkZ9wQgGrQYeYrRien9ZRiYQwlfq3REsYC3A7NuhieFQ-AWbZ_JJ0jy8QhcrvFj2IQXJieHDXgq25IEtXnopSlN1LRyER2NaIpbSS-mW5DUK1V8EZ7uZSGGF-TeCKn39qWhx2cVDSkDQYKwfiTMWVSQHjixwSyFRfqYfWI-nt-pYmZAQmXHm_CmaxrxxaeyXV5fk_5gvcKlZT7SkTSUrJBS4sUaLVWHstvvJiSqQAuY7qmP5RQZu-tMQlWXRdy2qpQjzWr2Y2igJ-tdl6wsozb-ADR1XSrrqpRXNkTh0BNxrMeNS4gx6TVT9LS7qiFX2Sme_Ymp0S7Nv5uC2BTF21soDnnf00cYrZFuai6IY_-QuKpY5-C4w4uTeXRFLrS4p2HM3lhM4R8pmToHYpT-tM_835UH0OXt3xOX65sOw5eeuCdLwydC48QhqJjGzg1sDe156K8yWXZADHJ56EMlNrB0T164Nbs4RkXM75olQbw6c4jQvwxP508ySNkpdUSTloXzrkJsS7QPia4bTKG_LxhMq-vgz3VlKxh8q-vh1BkVLxRAm6-cofEjH7MzJr0vk-Zm0J9Hr6GLKQHIHrN14cExwqJF67Ii5atpXB98vpBObv2rXr1ASaTwcHqu_nqZJYiLFbZdhowCB7huLNeltLVXIY_TXc4lO2Qys8uPosTl5xVN4vQDJAv3PZjJKibkK9QBxZmXNGSsj4zHgDkMrr3Z1NVhCMCYIuaArTYMqos45oAgH7Tc95qZtNtB7v1Xvo_fn1YBjUFodahVTF4diRdq1_V30biRVW4J4tx8KnGgSDHl83bi4L56U4lWhEtpzM3mZP_S3eZA6nU3hLdqDCwuiznAAvjqDiJby_5pPtzfbWIlOV "TestRunner")
</details>

## TestCase interface
De [/src/Framework/TestCase](https://github.com/sebastianbergmann/phpunit/blob/master/src/Framework/TestCase.php) klasse 