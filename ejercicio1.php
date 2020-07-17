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
             <h1><em>Ejercicio Numero 1<em></h1>
         </div>
     </header>
   <main class="row">
       <article class="col-12">

           <h3><em>La pagina solo estara disponible los primeros 10 dias del mes. la funcion $dia = date ("d") retorna
               el numero de dia. mostramos un cartel que diga sitio fuera de servicio si la fecha es menor o igual a 10,
               en caso contrario mostraremos un mensaje se sitio fuera de servicio.
           <em></h3>
       </article>
    </main>
       <hr>
       <section class="row">
           <div class="col-12">
              <?php
      
      
    
              $dia =date("d");
               if ($dia <= 10) {
               echo "El sitio se  encuentra disponible";
               } else {
               echo "Sitio fuera de servicio";
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