<?php
/*
Template Name: Welcome Custom Page
*/
?>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if lt IE 9]>
															<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
															<![endif]-->
    <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
    <link rel="preload" href="https://pishka.shop/wp-content/uploads/2024/05/geek_cultural.png" as="image">
    <?php wp_head();?>
  </head>
  <body class="vsc-initialized" cz-shortcut-listen="true" <?php body_class();?>>
  <?php wp_body_open();?>
    <div class="page-wrapper">
        <div id="awge-tube-border" class="awge-tube-border"></div>
        <div class="awge-tube-shape">
          <main id="awge-content" class="awge-content">
            <div id="landing-content" class="landing-content">
              <div id="landing-title" class="landing-title">
                <img src="<?php echo content_url();?>/uploads/2024/05/geek_cultural.png" loading="eager" alt="black logo of <?php echo the_company_name(); ?>" class="landing-image">
              </div>
              <div class="landing-start">
                <a href="<?php echo get_permalink( 6 )?> " class="landing-start-container w-inline-block">
                  <h2 id="landing-start-button" class="landing-start-text">
                    <span data-w-id="cacc93a3-cff7-687e-3d32-17ec78803a54" style="opacity: 0.2326; will-change: opacity;" class="landing-start-arrow">›</span>PRESS START
                  </h2> 
                </a>
              </div>
              <div class="landing-copyright">
                <div class="landing-copyright-text">© &nbsp;<?php echo date("Y");?> &nbsp;<?php echo the_company_name(); ?></div>
              </div>
            </div>
          </main>
      </div>
    </div>
    <?php wp_footer();?>
  </body>
</html>