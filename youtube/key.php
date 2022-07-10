<?php
$key = $_POST["keyword"];
header('Location: /youtube/search?q='.$key.'');
?>