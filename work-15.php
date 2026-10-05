<?php
    function processComment($text) {
        $cleanText = trim($text);
        if (strlen ($cleanText) < 5) {
            return "Комментарий слишком короткий";
        }else {
            return "Комментарий принят";
        }
    }
    echo processComment ("Привет! ");
    echo processComment ("OK");
    ?>