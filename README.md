1º Projeto de Segurança Informática e Nas Organizações: Vulnerabilidades
Grupo 29


## Sobre 

Criação de uma página web de uma clínica de saúde, com front-end e back-end. Contém também um conjunto de vulnerabilidades que podem ser usados para comprometerem o aplicativo ou o sistema. 


## Setup 

Confirmar que tem o Docker a correr na máquina. 

De seguida, correr os seguintes comandos: 

	$ sudo chmod +x run.sh
	$ ./run.sh

O serviço web irá, após estes passos, correr no:

	localhost:81
	
Para correr tudo corretamente é necessário dar setup á database:

	http://localhost:81/www/app_sec/php/setup-tables.php
	http://localhost:81/www/app/php/setup-tables.php

As tabelas de base de dados estão disponiveis em:

	http://localhost:81/phpmyadmin/index.php?route=/database/structure&db=admin


## Vulnerabilidades

1: [CWE-79](https://cwe.mitre.org/data/definitions/79.html)   -> Cross-site Scripting

2: [CWE-89](https://cwe.mitre.org/data/definitions/89.html)   -> SQL Injection

3: [CWE-256](https://cwe.mitre.org/data/definitions/256.html) -> Plaintext Storage of a Password 

4: [CWE-306](https://cwe.mitre.org/data/definitions/306.html) -> Missing Authentication for Critical Function

5: [CWE-425](https://cwe.mitre.org/data/definitions/425.html) -> Forced Browsing

6: [CWE-521](https://cwe.mitre.org/data/definitions/521.html) -> Weak Password Requirements

7: [CWE-549](https://cwe.mitre.org/data/definitions/549.html) -> Missing Password Field Masking|


## Autores

93427   Lara Viera Rodrigues 		laravierarodrigues@ua.pt
100084  Inês Felício Moreira  	inesfm@ua.pt
102737  Ricardo da Cruz Machado	ricardo.machado@ua.pt
102587  Guilherme do Casal Martins 	gcmartins@ua.pt

