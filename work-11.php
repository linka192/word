<?php
    function getGreeting($name) {
        return "Привет, ". $name . "!";
    }
    echo getGreeting ("Поля");
    echo getGreeting ("Лита");
    echo getGreeting ("Лера");
    ?>