<!-- footer section start -->
<div class="section_footer ">
    <div class="container">
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Sobre nós</h2>
                    <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam,
                        quisdotempor incididunt r</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Links úteis</h2>
                    <div class="useful_link">
                        <ul>
                            <li><a href="#sobre-nos">Sobre nós</a></li>
                            <li><a href="#nossos-projetos">Serviços</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Contato</h2>
                    <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e </p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Newsletter</h2>
                    <input type="" class="email_text" placeholder="Insira seu e-mail" name="Enter Your Email">
                    <button class="subscribr_bt">INSCREVA-SE</button>
                </div>
            </div>
        </div>
        <div class="social_icon">
            <ul>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/fb-icon.webp"></a></li>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/twitter-icon.webp"></a>
                </li>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/linkdin-icon.webp"></a>
                </li>
                <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/instagram-icon.webp"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">Tech Innovations</p>
    </div>
</div>

<?php wp_footer(); ?>
<script>
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

</body>

</html>