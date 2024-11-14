<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="post">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>
<?php endwhile; else : ?>
<p>Desculpe, nenhum conteúdo encontrado.</p>
<?php endif; ?>


<?php get_footer(); ?>