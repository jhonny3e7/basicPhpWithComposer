<?php
    // Challenge #1 - "Hola Mundo"
    if($argc > 1)
        $name = $argv[1];
    else {
        echo "Por favor ingrese su Nombre: ";
        $name = trim(fgets(STDIN));
    }

    echo PHP_EOL."Hola $name".PHP_EOL;

    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;

    // Challenge #2 - "Hola... nombre y apellido"
    if($argc > 1) {
        $name = $argv[1];
        $lastName = $argv[2];
    }
    else {
        echo "Por favor ingrese su Nombre: ";
        $name = trim(fgets(STDIN));
        echo "Por favor ingrese su Apellido: ";
        $lastName = trim(fgets(STDIN));
    }

    echo PHP_EOL."Hola, $name $lastName".PHP_EOL;

    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;

    // Challenge #3 - "Mensaje Multilínea"
    echo 'Platzi cuenta con cursos de '.PHP_EOL.'[MARKETING]'.PHP_EOL.'[DISEÑO Y UX]'.PHP_EOL.'[CRECIMIENTO PROFESIONAL]'.PHP_EOL.'[STARTUPS]'.PHP_EOL.'[DESARROLLO E INGENIERIA]'.PHP_EOL.'[NEGOCIOS Y EMPRENDIMIENTO]'.PHP_EOL.'[CONTENIDO DIGITAL]';

    // Challenge #4 - "Suma de enteros"