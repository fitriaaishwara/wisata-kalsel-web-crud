<?php
    function create_message($text,$type){
        session_start();
        $_SESSION["message"]['text'] = $text;
        $_SESSION["message"]['type'] = $type;
        $_SESSION["message"]['show'] = "show";
    }
?>