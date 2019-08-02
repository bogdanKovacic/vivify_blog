<?php

include "db.php";

$author = $_POST['author'];
$title = $_POST['title'];
$bodyText = $_POST['bodyText'];

$sql= "INSERT INTO posts(author, title, body) VALUES ('$author', '$title', '$bodyText')";
$statement = $connection->prepare($sql);
$statement->execute();

header("location: index.php");