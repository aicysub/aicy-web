<?php
@header("Location: /");
$query = $_POST["search"];
    header('Location: /search?q='.$query.'');
?>