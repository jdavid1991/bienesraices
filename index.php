<?php
require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>

<main class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
      <h3>seguridad</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, obcaecati voluptate earum assumenda, molestiae quos illum temporibus cupiditate saepe error voluptatibus. Aliquam nisi autem possimus dolore molestias pariatur, magnam cumque.</p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
      <h3>Precio</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, obcaecati voluptate earum assumenda, molestiae quos illum temporibus cupiditate saepe error voluptatibus. Aliquam nisi autem possimus dolore molestias pariatur, magnam cumque.</p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
      <h3>Tiempo</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, obcaecati voluptate earum assumenda, molestiae quos illum temporibus cupiditate saepe error voluptatibus. Aliquam nisi autem possimus dolore molestias pariatur, magnam cumque.</p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casa y Depas en venta</h2>

  <?php
  include 'includes/templates/anuncios.php'
  ?>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
  <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp">
          <source srcset="build/img/blog1.jpg" type="image/jpeg">
          <img src="build/img/blog1.jpg" alt="Texto entrada blog" loading="lazy">
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">Escrito el: <span>20/10/23</span>Por: <span>Admin</span></p>
          <p>Consejo para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
        </a>
      </div>

    </article>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp">
          <source srcset="build/img/blog2.jpg" type="image/jpeg">
          <img src="build/img/blog2.jpg" alt="Texto entrada blog" loading="lazy">
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoración de tu hogar</h4>
          <p class="informacion-meta">Escrito el: <span>20/10/23</span>Por: <span>Admin</span></p>
          <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para dale vida a tu espacio</p>
        </a>
      </div>

    </article>

  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Juan David Ramirez</p>
    </div>
  </section>
</div>

<?php
incluirTemplate('footer');
?>