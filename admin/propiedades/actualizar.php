<?php

use App\propiedad;
use Intervention\Image\ImageManagerStatic as Image;

require '../../includes/app.php';

estaAutenticado();

//Validar la URL ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
  header('Location: /admin');
}

//Obtener los datos de la propiedad
$propiedad = propiedad::find($id);


//Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes de errores
$errores = propiedad::getErrores();

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  
  //Asignar los atributos
  $args = $_POST['propiedad'];

  $propiedad->sincronizar($args);

  //Validacion
  $errores = $propiedad->validar();

  // Subida de archivos
  //Generar un nombre unico
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

  if ($_FILES['propiedad']['tmp_name']['imagen']) {
    $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
    $propiedad->setImagen($nombreImagen);
  }
  
  //Revisar que el array de errores este vacio
  if (empty($errores)) {
    //Almacenar la imagen

    $image->save(CARPETAS_IMAGENES . $nombreImagen);

    $propiedad->guardar();
   
  }
}
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Actualizar</h1>
  <a href="/admin/" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_propiedades.php' ?>

    <input type="submit" value="actualizar propiedad" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplate('footer');
?>