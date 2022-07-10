<?php
$key = $_POST["audio"];
header('Location: /youtube/audio?v='.$key.'');
?>