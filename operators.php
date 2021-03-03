<?php
    //Asignacion
    $num = 9;
    $lang = [
        'es'    =>  'Español',
        'en'    =>  'Inglés'
    ];

    // Asignacion por referencia
    $valor2 = &$valor;
    echo "valor ($valor) - valor2: $valor2<br/>";

    $valor = 16;
    echo "valor ($valor) - valor2: $valor2<br/>";

    //Aritmética
    echo 'Aritmética<br/>';
    echo "Suma 2 + 2            :   ". ((int) 2 + (int) 2)."<br/>";
    $res1 = 32 + 3;
    echo "Suma 32 + 3           :   $res1<br/>";
    $res2 = 3 * (2 + 3);
    echo "Opera 3 * (2 + 3)     :   $res2<br/>";
    echo "Resta 2 -2            :   ". ((int) 2 - (int) 2)."<br/>";
    echo "Multiplica 2 * 2      :   ". (2 * 2)."<br/>";
    echo "Divide 2 / 2          :   ". (2 / 2)."<br/>";
    echo "Módulo 2 % 2          :   ". (2 % 2)."<br/>";
    echo "Exponencial 2 ** 2    :   ". (2 ** 2)."<br/>";
    echo '<hr/>';

    //Comparación
    echo 'Comparación<br/>';
    $valor = 7;
    if(($valor > 5) && ($valor < 10))
        echo "Valor ($valor) - Compara (\$valor > 5) && (\$valor < 10): $valor<br/>";

    $valor = 12;
    if(($valor >= 0) && ($valor <= 20))
        echo "Valor ($valor) - Compara (\$valor >= 0) && (\$valor <= 20): $valor<br/>";

    $valor = "10";
    if($valor === "10")
        echo "Valor ($valor) - Compara (\$valor === \"10\"): $valor<br/>";

    $valor = 12;
    if(($valor > 0) && ($valor < 5) || ($valor > 10) && ($valor < 15))
        echo "Valor ($valor) - Compara (\$valor > 0) && (\$valor < 5) || (\$valor > 10) && (\$valor < 15): $valor<br/>";


