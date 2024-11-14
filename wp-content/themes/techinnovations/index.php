<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_title();
    the_content();

endwhile; else:
    _e( 'Desculpe, nenhum post encontrado.' );
endif;