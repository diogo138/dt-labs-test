<?php /* Template name: Contato */ ?>

<?php get_header(); ?>
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="email_box">
                    <div class="input_main">
                        <div class="container">
                            <?php echo do_shortcode('[contact-form-7 id="7254283" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image_6"><img src="<?= get_template_directory_uri(); ?>/assets/images/img-6.webp"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>