 <?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "armybomb";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>




<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>
<link rel="stylesheet" href="estilo.css">
  <!-- Enlace al documento css. no aplicable en codepen.
  <link rel="stylesheet" type="text/css" href="contact-form.css">
-->
  
  </head>


<body>  
  
  <!-- formulario de contacto en html y css -->  
<form action="pedido" method="post">
  <div class="contact_form">

    <div class="formulario">      
      <h1>Registrate</h1>
        <h3>Informanos para poder enviarte tu pedido</h3>

 <form action="submeter-formulario.php" method="post">       

            
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Teléfono
                  </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    
              
                <p>
                  <label for="website" class="colocar_website">Direccion
                  </label>
                    <input type="direccion" name="introducir_direccion" id="direccion" placeholder="Escribe tu direccion">
                </p>    
              
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">version que pediste
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="version"></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>
                </p>          
            
          </form>
        <script>
function confirmacion() {
  var pregunta = confirm("¿Deseas regresar a la pagina principal?")
  if (pregunta){
    alert("¿Estas seguro?")
    window.location = "file:///C:/Users/jocelyn%20soto/Downloads/Armybomb/Armybomb.html";
  }
  else{
    alert("Quizás en otro momento...\n Gracias de todas formas")
  }
}
</script>
<button type="button" onclick="confirmacion()" >Regresar</button>
    </div>  
  

</form>
</div>

</body>
</html>

<?php

  if(isset($_POST['Registrate'])){
      
      $Nombre = $_POST['Nombre'];
      $Email = $_POST['Email'];
      $Telefono = $_POST['Telefono'];
      $Direccion = $_POST['Direccion'];
      $Version = $_POST['VersionAB'];
      
      $insertar = "INSERT INTO pedidos Values ('$Nombre','$Email','$Telefono','Direccion' 'versionAB' '')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>

