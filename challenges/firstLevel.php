<?php
    // Challenge #1 - "Hola Mundo"
    echo 'Challenge #1 - "Hola Mundo"'.PHP_EOL;

    echo "Por favor ingrese su Nombre: ";
    $name = trim(fgets(STDIN));

    echo PHP_EOL."Hola $name".PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #2 - "Hola... nombre y apellido"
    echo 'Challenge #2 - "Hola... nombre y apellido"'.PHP_EOL;

    echo "Por favor ingrese su Nombre: ";
    $name = trim(fgets(STDIN));
    echo "Por favor ingrese su Apellido: ";
    $lastName = trim(fgets(STDIN));

    echo PHP_EOL."Hola, $name $lastName".PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #3 - "Mensaje Multilínea"
    echo 'Challenge #3 - "Mensaje Multilínea"'.PHP_EOL;

    echo 'Platzi cuenta con cursos de '.PHP_EOL.'[MARKETING]'.PHP_EOL.'[DISEÑO Y UX]'.PHP_EOL.'[CRECIMIENTO PROFESIONAL]'.PHP_EOL.'[STARTUPS]'.PHP_EOL.'[DESARROLLO E INGENIERIA]'.PHP_EOL.'[NEGOCIOS Y EMPRENDIMIENTO]'.PHP_EOL.'[CONTENIDO DIGITAL]'.PHP_EOL;

    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #4 - "Suma de enteros"
    echo 'Challenge #4 - "Suma de enteros... no tan enteros"'.PHP_EOL;

    echo "Por favor ingrese el primer número: ";
    $number1 = trim(fgets(STDIN));
    echo "Por favor ingrese el segundo número: ";
    $number2 = trim(fgets(STDIN));

    echo sprintf("El valor de la suma es: %01.2f",($number1+$number2)).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #5 - "Suma y multiplicación"
    echo 'Challenge #5 - "Suma y multiplicación"'.PHP_EOL;

    echo "Por favor ingrese el primer número: ";
    $number1 = trim(fgets(STDIN));
    echo "Por favor ingrese el segundo número: ";
    $number2 = trim(fgets(STDIN));
    echo "Por favor ingrese el tercer número: ";
    $number3 = trim(fgets(STDIN));

    echo sprintf("El valor de la operación es: %01.2f",(($number1+$number2)*$number3)).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;

