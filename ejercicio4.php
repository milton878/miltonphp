<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo de nuestra pagina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
 <div class="container">
     <header class="row">
         <div class="col-12">
             <h1><em>Ejercicio Numero 4<em></h1>
         </div>
     </header>
   <main class="row">
       <article class="col-12">

           <h3><em>Generar aleatoriamente un valor entre 1 y 7, mostrar el dia derminado
           de la semana.(if anidados).
           <em></h3>
       </article>
    </main>
       <hr>
       <section class="row">
           <div class="col-12">
              <?php
               $num = rand (1,7);
               echo $num ;
            ?>
            <div class="resultado col-12">
            <?php
             if ($num <=1){
              echo "hoy es lunes ";
             } else{
                 if($num <=2 ){
                     echo "hoy es martes ";
                 }else{
                     if($num <=3 ){
                      echo "hoy es miercoles ";
                     }else{
                         if($num <=4 ){
                             echo "hoy es jueves ";
                         } else {
                             if ($num <=5 ){
                                 echo "hoy es viernes ";
                             } else {
                                 if ($num <=6 ){
                                     echo "hoy es sabado ";
                                 }else {
                                     echo "hoy es domingo ";
                                 }
                             }
                         }
                     }
                 }
             }
             ?>
             </div>
          </div>
     </section>
      <hr>
      <div clas="row pt-3">
        <div class="col-6">
            <button type="button" class="btn btn-warning btn-lg"><a href=index.php> Volver a inicio</a></button>
            

        </div>
    </div>
  </div>




 </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>