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
             <h1><em>Ejercicio Numero 3<em></h1>
         </div>
     </header>
   <main class="row">
       <article class="col-12">

           <h3><em>Generar aleatoriamente un valor entre 1 y 999, determinar, si el
           numero tiene uno, dos, o tres digitos.
           <em></h3>
       </article>
    </main>
       <hr>
       <section class="row">
           <div class="col-12">
              <?php
                 $num = rand (1,999);
                 echo "El numero genereado aleatoriamente es " , "$num <br>";
                 
                 if ($num < 10){
                     echo "El numero generado tiene 1 digito";
                 }elseif ($num < 100) {
                     echo "El numero generado tiene 2 digitos";
                 }else{
                     echo "El numero generado tiene 3 digitos";
                 }
      
    
              
    
                ?>
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