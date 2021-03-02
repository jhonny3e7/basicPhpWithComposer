<?php
    // Ejercicio 1
    echo '<strong>Ejercicio 1</strong><br />';
    $arreglo1 = [
        'keyStr1' => 'lado',
        'ledo',
        'keyStr2' => 'lido',
        'lodo',
        'ludo'
    ];


    $str = '';

    foreach($arreglo1 as $key => $value){
        $str .= $arreglo1[$key].',';
    }

    $str.= "<br/> Decirlo al reves lo dudo.<br/>";

    $arreglo2 = array_reverse($arreglo1);

    foreach($arreglo2 as $key => $value){
        $str .= $arreglo2[$key].',';
    }

    $str.= '<br/>¡Qué trabajo me ha costado!';

    echo $str;
    echo "<br /><br /><br /><hr /><br />";


    // Ejercicio 2
    echo '<strong>Ejercicio 2</strong><br />';
    $countries = [
            'Colombia'  => ['Bogotá', 'Medellin', 'Cali'],
            'Chile'     => ['Santiago', 'Viña del Mar', 'Concepción'],
            'Canadá'    => ['Montreal', 'Niagara Falls', 'Charllotetown'],
            'EEUU'      => ['Chicago', 'Springfield', 'Boston'],
            'España'    => ['Madrid', 'Barcelona', 'Valencia']
    ];

    $str = '';

    foreach ($countries as $country => $cities) {
        $str.= "<strong>$country:</strong>";
        foreach ($cities as $city) {
            $str.= "$city - ";
        }
        $str.= '<br />';

    }

    echo $str;
    echo "<br /><br /><br /><hr /><br />";


    //Ejercicio 3
    echo '<strong>Ejercicio 3</strong><br />';
    $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
    $countValores = count($valores);

    sort($valores);

    echo "Los 3 números menores: {$valores[0]} - {$valores[1]} - {$valores[2]}<br />";
    echo "Los 3 números mayores: {$valores[$countValores-1]} - {$valores[$countValores-2]} - {$valores[$countValores-3]} <br />";


    /****************** */

    $arrVar = array(
        "curso1"    => "php",
        'curso2'    =>  'js',
        3           =>  'python',
        'java'
    );

    foreach($arrVar as $key => $value) {
        echo "$key => $value - ";
    }

    echo '<br/><br/>';


?>