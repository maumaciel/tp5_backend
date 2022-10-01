<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo práctico n°4 - Tarea n° 5 - backend</h1>
    <h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
</h2>
    <?php 
        $cont = 0;
        $numpar = [];
        for ($i=1; count($numpar)<10; $i++) { 
            if (($i%2)==0) {
              $numpar[$cont] = $i;
              $cont++; 
              print "$i\n<br>";
            }
        }    
    ?>
    <hr>
    <h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().</h2>
    <?php
        $array = ['Pedro', 'Ana', 34, 1];
        print_r($array);
    ?>
    <hr>
    <h2>3. Crear un array asociativo e introducir los siguientes valores:</h2>
    <h2>Nombre: Pedro</h2>
    <h2>Apellido: Torres</h2>
    <h2>Dirección: Av. Mayor 3703</h2>
    <h2>Teléfono: 1122334455</h2>
    <?php
        $array = [ 
            'nombre' => 'Pedro',
            'apellido' => 'Torres',
            'direccion' => 'Av. Mayor 3703',
            'telefono' => 1122334455
        ];

        print_r($array);
    ?>
    <hr>
    <h2>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</h2>
    <?php
        $ciudades = ['Madrid','Barcelona','Londres','New York','Los Angeles','Chicago'];
        for ($i=0; $i < count($ciudades) ; $i++) { 
            print("La ciudad con el indice ".$i." tiene el nombre ".$ciudades[$i]."<br>");
        }
    ?>
    <hr>
    <h2>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.</h2>
    <?php
        $ciudades2 = [
            'MD' => 'Madrid',
            'BCL' => 'Barcelona',
            'LD' => 'Londres',
            'NY' => 'New York',
            'LA' => 'Los Ángeles',
            'CCG' => 'Chicago'
        ];
        foreach ($ciudades2 as $ind => $value){
            echo ($ind.": ".$value."<br>");
       }
    ?>
</body>
</html>