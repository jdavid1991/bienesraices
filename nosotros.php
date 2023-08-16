<?php
require 'includes/app.php';
incluirTemplate('header');
?>

        
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
              
              
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, vel ea. A ut ea sint itaque voluptatem aspernatur alias magnam culpa quidem voluptates porro pariatur fuga fugit in, aliquam nesciunt! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo molestiae fugiat inventore architecto perspiciatis magni facilis voluptatem quibusdam reiciendis cum, qui itaque consequuntur sed labore quo amet accusamus dolorum quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aperiam quidem vero aliquid nostrum laboriosam quo reprehenderit facilis voluptas iusto repudiandae consectetur commodi, quaerat omnis labore, unde cumque amet neque!</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dolores rem iste ullam impedit corrupti natus molestiae rerum harum quae blanditiis et nobis similique magnam quas optio ipsam, veritatis fugiat!</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2>Más Sobre Nosotros</h2>

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
    </section>

<?php
incluirTemplate('footer');
?>