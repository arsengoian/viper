<?php

    use App\Application;

    require 'bootstrap.php';


    foreach (['notif'] as $x) {
        echo ucfirst($x).': ';
        Application::routeDaemon([$x.'-alive', $x, 'isAlive']);
        echo '<br>';
    }
