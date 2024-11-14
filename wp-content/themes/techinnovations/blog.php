<?php 
// Template Name: blog
get_header(); ?>
<!-- services section start -->
<div id="nossos-projetos" class="product_section layout_padding mb-5">
    <div class="container">
        <div class="product_text">Nossos <span style="color: #5ca0e9;">projetos</span></div>
        <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem</p>
        <div class="product_section_2">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'projetos' 
                );
                $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-6">
                    <div class="image_2"><?php the_post_thumbnail(); ?></div>
                    <h2 class="game_text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="long_text"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p>Nenhuma postagem encontrada.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>