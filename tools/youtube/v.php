<?php
$media_link = $_POST["url"];
$media = $_POST["select"];
    header('Location: /youtube/'.$media.'?v='.$media_link.'');
?>