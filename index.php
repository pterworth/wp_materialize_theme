<?php get_header(); ?>

<!-- <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
</div> -->
<img class="materialboxed" width="650" src="https://loremflickr.com/250/250/" onclick="instance.open();">
<main>
  <?php 
    if ( have_posts() ) {
      while ( have_posts() ) { the_post(); ?>
        <div class="card-panel hoverable">
          <?php the_title(); ?>
          <div class="card-image"></div>
          <div class="card-content"></div>
          <div class="card-action"></div>
        </div><?php
      } // end while
    } // end if
  ?>
</main>

<?php get_footer(); ?>