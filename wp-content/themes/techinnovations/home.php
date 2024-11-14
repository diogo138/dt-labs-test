<?php get_header(); ?>

<?php get_template_part('template-parts/banner'); ?>

<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image_2"><img src="<?= get_template_directory_uri(); ?>/assets/images/img-2.webp"></div>
            </div>
            <div class="col-md-6">
                <h1 class="about_text">SOBRE NÓS</h1>
                <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority
                    have suffered alteration in some form, by injected humour, or randomised words which don't look even
                    slightly believable</p>
                <div class="shop_bt_2"><a href="#">Saiba mais</a></div>
            </div>
        </div>
    </div>
</div>
<!-- about section end -->

<!-- services section start -->

<?php get_template_part( 'template-parts/blog' ); ?>

<!-- services section end -->

<!-- testimonial section start -->
<div class="testimonial_section layout_padding">
    <div class="container">
        <h3 class="testimonial_text">Depoimentos</h3>
        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <div class="testimonial_section_2">
            <div class="box_main">
                <div class="quote_icon"><img src="<?= get_template_directory_uri(); ?>/assets/images/quote-icon.webp">
                </div>
                <p class="dolor_text"> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum </p>
                <div class="client_main">
                    <div class="client_left">
                        <div class="images_5"><img src="<?= get_template_directory_uri(); ?>/assets/images/img-5.webp">
                        </div>
                    </div>
                    <div class="client_right">
                        <h4 class="sandy_text">Fulano de tal</h4>
                        <p class="sandy_text_1">Representante de vendas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section end -->

<!-- contact section start -->
<?php get_template_part( 'template-parts/contato' ); ?>
<!-- contact section end -->

<?php get_footer(); ?>