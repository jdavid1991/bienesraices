<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
        
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>

               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, vel ea. A ut ea sint itaque voluptatem aspernatur alias magnam culpa quidem voluptates porro pariatur fuga fugit in, aliquam nesciunt! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo molestiae fugiat inventore architecto perspiciatis magni facilis voluptatem quibusdam reiciendis cum, qui itaque consequuntur sed labore quo amet accusamus dolorum quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aperiam quidem vero aliquid nostrum laboriosam quo reprehenderit facilis voluptas iusto repudiandae consectetur commodi, quaerat omnis labore, unde cumque amet neque!</p>

               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi dolores rem iste ullam impedit corrupti natus molestiae rerum harum quae blanditiis et nobis similique magnam quas optio ipsam, veritatis fugiat!</p>
        </div>
    </main>

<?php
incluirTemplate('footer');
?>