<?php
session_start();
include('lib/classMovie.php');

$newMovie = [
   'title' => $_POST['title'],
   'author' => $_POST['author'],
];

$mov = new Movie();
$mov->addMovie($newMovie);

Movie::debug($_SESSION['ar_movies']);

header("Location: index.php");
?>
