<?php
/*    // Challenge #1 - "Hola Mundo"
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

    echo sprintf("El valor de la suma es: %.2f",($number1+$number2)).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #5 - "Suma y multiplicación"
    echo 'Challenge #5 - "Suma y multiplicación"'.PHP_EOL;

    echo "Por favor ingrese el primer número: ";
    $number1 = trim(fgets(STDIN));
    echo "Por favor ingrese el segundo número: ";
    $number2 = trim(fgets(STDIN));
    echo "Por favor ingrese el tercer número: ";
    $number3 = trim(fgets(STDIN));

    echo sprintf("El valor de la operación es: %.2f",(($number1+$number2)*$number3)).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #6 - "Resta de pizzas"
    echo 'Challenge #6 - "Resta de pizzas"'.PHP_EOL;

    echo "Por favor ingrese la cantidad de rebanadas de pizzas: ";
    $totalPizzaSlides = trim(fgets(STDIN));
    // Se infiere de manera aleatoria la cantidad de pizzas consumidas
    $eatenPizzaSlides = mt_rand(1, $totalPizzaSlides);

    echo "Se consumieron $eatenPizzaSlides pizzas en la reunión".PHP_EOL;
    echo sprintf("Quedaron %d pizzas", $totalPizzaSlides - $eatenPizzaSlides).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #7 - "Edad futura y pasada"
    echo 'Challenge #7 - "Edad futura y pasada"'.PHP_EOL;

    echo "Por favor ingrese su nombre: ";
    $name = trim(fgets(STDIN));
    echo "Por favor ingrese su edad: ";
    $age = trim(fgets(STDIN));

    echo sprintf("%s, el año pasado tenías %d años y el próximo año cumplirás %d años", $name, $age - 1, $age + 1).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #8 - "Divide la cuenta"
    echo 'Challenge #8 - "Divide la cuenta"'.PHP_EOL;

    echo "Por favor indique el total a pagar: ";
    $baseCheck = trim(fgets(STDIN));
    echo "Por favor indique cuantas personas para dividir la cuenta: ";
    $totalPersons = trim(fgets(STDIN));
    echo "Por favor indique el porcentaje de propina: ";
    $tipPercentage = trim(fgets(STDIN));
    echo "Por favor indique el porcentaje de impuestos: ";
    $taxes = trim(fgets(STDIN));

    $totalCheck = ($baseCheck + $tipPercentage) + (($baseCheck + $tipPercentage) * ($taxes/100));

    echo sprintf("Total a pagar: $ %.2f", $totalCheck).PHP_EOL;
    echo sprintf("Total a pagar por persona: $ %.2f", $totalCheck / $totalPersons).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;


    // Challenge #9 - "Calculando días"
    echo 'Challenge #9 - "Calculando días"'.PHP_EOL;

    echo "Por favor indique la cantidad de días: ";
    $days = trim(fgets(STDIN));

    $hours      =   $days * 24;
    $minutes    =   $hours * 60;
    $seconds    =   $minutes * 60;

    echo sprintf("Total a horas (%d), minutos (%d), segundos (%d)", $hours, $minutes, $seconds).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;
*/

    // Challenge #10 - "Conversor de millas"
    echo 'Challenge #10 - "Conversor de millas"'.PHP_EOL;

    echo "Por favor indique la cantidad de millas: ";
    $miles = trim(fgets(STDIN));

    echo sprintf("%d millas, equivalen a %.4f kilómetros", $miles, $miles * 1.609344).PHP_EOL;
    echo PHP_EOL.'*********'.PHP_EOL.PHP_EOL;