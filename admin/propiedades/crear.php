<?php

require '../../includes/app.php';

use App\propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

estaAutenticado();

$propiedad = new propiedad;

// Consulta para obtener todos los vendedores
$vendedores = Vendedor::all();

//Arreglo con mensajes de errores
$errores = propiedad::getErrores();

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  /**Crea una nueva instancia */
  $propiedad = new propiedad($_POST['propiedad']);

  
  //** SUBIDA DE ARCHIVOS **//

  //Generar un nombre unico
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

  // Setear la imagen
  //Realiza un resize a la imagen con intervention
  if ($_FILES['propiedad']['tmp_name']['imagen']) {
    $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
    $propiedad->setImagen($nombreImagen);
  }

  // Validar
  $errores = $propiedad->validar();

  //Revisar que el array de errores este vacio

  if (empty($errores)) {

    //Crear carpeta para subir imagenes

    if (!is_dir(CARPETAS_IMAGENES)) {
      mkdir(CARPETAS_IMAGENES);
    }

    //Guarda la imagen en el servidor
    $image->save(CARPETAS_IMAGENES . $nombreImagen);

    // Guarda en la base de datos
    $propiedad->guardar();
  }
}

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin/" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_propiedades.php' ?>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplate('footer');
?>