<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Practico 1</title>
  </head>
  <body>
    <?php
    $saludo = "Hola Mundo";
    echo $saludo;
     ?>
     <br>
    <h3>Suma</h3>
    <?php
    $num1 = 130;
    $num2 = 20;
    $suma = $num1+$num2;
    echo $suma;
     ?>
     <br>
     <h3>Resta</h3>
     <?php
     $num1 = 130;
     $num2 = 20;
     $resta = $num1-$num2;
     echo $resta;
      ?>
      <h3>Multiplicacion</h3>
      <?php
      $num1 = 130;
      $num2 = 20;
      $multiplicacion = $num1*$num2;
      echo $multiplicacion;
       ?>
       <h3>Division</h3>
       <?php
       $num1 = 130;
       $num2 = 20;
       $division = $num1/$num2;
       echo $division;
        ?>
        <h3>Transformación de grados Celsius a Fahrenheit</h3>
        <?php
        $Celsius = 20;
        $Fahrenheit = 9/5 * $Celsius +32;
        echo $Fahrenheit;
         ?>
         <h3>Perimetro y área de un rectángulo</h3>
         <?php
         $altura= 12;
         $base= 18;

         $perimetro = ($altura*2)+($base*2);
         $area= $altura+$base;

         echo $perimetro;
         echo "<br>";
         echo $area;
          ?>
          <h3>Área de un circulo</h3>
          <?php
          $pi = 3.1416;
          $radio = 30;
          $area = ($pi*($radio*$radio));
          echo $area;
           ?>
  </body>
</html>
