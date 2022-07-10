<?php
$key = $_POST["video"];
$hide = $_POST["hide"];
if(empty($hide)){
    header('Location: /youtube/video?v='.$key.'');
}else{
    header('Location: /youtube/video?v='.$key.'&hide='.$hide.'');
}

?>