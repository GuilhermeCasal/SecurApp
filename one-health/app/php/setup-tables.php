<?php

require 'db-handler.php';

// Setup users table
$users = "CREATE TABLE `admin`.`users`(
	username VARCHAR(255) NOT NULL ,
	email VARCHAR(255) NOT NULL ,
	pwd VARCHAR(255) NOT NULL ,
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
)";

// Setup users table secure
$users_sec = "CREATE TABLE `admin`.`users_sec`(
	username VARCHAR(255) NOT NULL ,
	email VARCHAR(255) NOT NULL ,
	pwd VARCHAR(255) NOT NULL,
	login_count INT NOT NULL,
	login_timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
)";

// Setup marcações table
$marcacoes = "CREATE TABLE `admin`.`marcacoes`(
	fullname VARCHAR(255) NOT NULL ,
	email VARCHAR(255) NOT NULL ,
	date VARCHAR(255) NOT NULL ,
	departement VARCHAR(255) NOT NULL ,
	number VARCHAR(255) NOT NULL ,
	message VARCHAR(255) NOT NULL ,
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
)";

mysqli_query($conn, $users);
mysqli_query($conn, $users_sec);
mysqli_query($conn, $marcacoes);