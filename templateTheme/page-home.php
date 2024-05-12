<?php
/*
Template Name: Home Custom Page
*/
?>

<html <?php language_attributes(); ?>>
  <head>
    <style>
      .wf-force-outline-none[tabindex="-1"]:focus {
        outline: none;
      }
    </style>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
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
    <?php wp_head(); ?>
  </head>
  <body class="body vsc-initialized" cz-shortcut-listen="true" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="page-wrapper">
      <div id="awge-tube-border" class="awge-tube-border awge-tube-border-mobile"></div>
      <div class="awge-tube-shape">
        <main id="awge-content" class="awge-content">
          <div class="home-content">
            <div class="home-container" >
              <div class="home-video-container">
                <div class="home-video-wrapper">
                  <a href="#" class="home-video-parent w-inline-block">
                    <div class="home-video-text">Live anime Events!</div>
                    <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f99a5c05542030b1e295_vhs-camera.gif" loading="eager" alt="a rotating VHS camera" class="home-video-vhs-gif">
                    <img src="<?php echo content_url();?>/uploads/2024/05/ezgif-6-8cb7d33aa7.webp" height="341" width="325" alt="short compilation of clips from AWGE music videos" class="home-video-media-gif">
                  </a>
                </div>
              </div>
              <div class="home-navbar">
                <a href="/" class="w-inline-block">
                  <img src="<?php echo content_url();?>/uploads/2024/05/geek_cultural.png" height="35" sizes="(max-width: 767px) 100vw, 122.7578125px" alt="black logo of <?php echo the_company_name(); ?>">
                </a>
              </div>
              <div class="home-options-container">
                <div class="w-layout-grid home-options-items">
                  <div id="w-node-_51e8143e-59c9-baf9-04c5-7560315772bd-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f578e4a9f971097d3d6a_awgeForum.gif" loading="eager" alt="rotating orange user icon" class="home-options-icon">
                      <h3 class="home-options-text orange-text">FORUM</h3>
                    </a>
                  </div>
                  <div id="w-node-_96a7c455-37ef-56e2-5dd8-a8513081b89e-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f57732df3ed213a57866_awgeDVD.gif" loading="eager" alt="rotating vintage DVD graphic with AWGE above" class="home-options-icon">
                      <h3 class="home-options-text black-text">DVD</h3>
                    </a>
                  </div>
                  <div id="w-node-_3788f589-6167-5764-97a1-e08f0db77cd7-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/645348c01912a32825c51adc_awge-hats.gif" loading="eager" alt="rotating green hat" class="home-options-icon">
                      <h3 class="home-options-text green-text">SHOP</h3>
                    </a>
                  </div>
                  <div id="w-node-f3ee81c2-a13f-fc0d-de0b-1e7d2c78822b-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="<?php echo content_url();?>/uploads/2024/05/rotate-geek.gif" style="transform: scale(1.6); margin-top: 28px;" loading="eager" alt="a rotating rallyrace-style logo for <?php echo the_company_name(); ?>" class="home-options-icon testing">
                      <h3 class="home-options-text black-text"><?php echo the_company_name(); ?></h3>
                    </a>
                  </div>
                  <div id="w-node-_34522e74-8f6f-d9de-9931-763c2b8fcbb3-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f5784964fb69525e7c16_question-block-red.gif" loading="eager" alt="rotating red cube with a question mark on each side" class="home-options-icon about">
                      <h3 class="home-options-text red-text">ABOUT</h3>
                    </a>
                  </div>
                  <div id="w-node-fd1a2b20-c493-6e48-cd5a-f3bd66fd1630-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f5780823a7d756548e06_pager.gif" loading="eager" alt="rotating pager" class="home-options-icon">
                      <h3 class="home-options-text green-text">CONTACT</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="awge-copyright awge-copyright-mobile">
              <div class="awge-copyright-text">© &nbsp;<?php echo date('Y');?> &nbsp;<?php echo the_company_name(); ?></div>
              <a href="#" class="awge-copyright-text">Terms and Conditions</a>
              <a href="#" class="awge-copyright-text">Privacy Policy</a>
            </div>
          </div>
          <div class="home-content-mobile">
            <div class="home-navbar home-navbar-mobile">
              <a href="/home" aria-current="page" class="w-inline-block w--current">
                <img src="<?php echo content_url();?>/uploads/2024/05/geek_cultural.png" height="35" sizes="(max-width: 767px) 122.7578125px, 100vw" alt="black logo of AWGE">
              </a>
            </div>
            <div class="home-container-mobile">
              <div class="home-section-video-mobile">
                <a href="#" class="home-video-ipad-mobile w-inline-block">
                  <div class="home-video-text">MEDIA</div>
                  <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea88443fc13007da457ecbe_ipad.svg" width="210" height="170" alt="">
                </a>
                <div class="home-video-gif-mobile">
                  <img src="<?php echo content_url();?>/uploads/2024/05/ezgif-6-8cb7d33aa7.webp" height="124" width="180" alt="short compilation of clips from AWGE music videos" class="image-gif">
                </div>
              </div>
              <div class="home-options-container-mobile">
                <div class="w-layout-grid home-options-items">
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb29-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f578e4a9f971097d3d6a_awgeForum.gif" alt="" loading="eager" class="home-options-icon">
                      <h3 class="home-options-text orange-text">FORUM</h3>
                    </a>
                  </div>
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb2e-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f57732df3ed213a57866_awgeDVD.gif" alt="" loading="eager" class="home-options-icon">
                      <h3 class="home-options-text black-text">DVD</h3>
                    </a>
                  </div>
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb33-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f5780823a794f7548e04_testing-mask.gif" alt="" loading="eager" class="home-options-icon">
                      <h3 class="home-options-text purple-text">SHOP</h3>
                    </a>
                  </div>
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb38-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="<?php echo content_url(); ?>/uploads/2024/05/rotate-geek.gif" style="transform: scale(2.5); margin-top: 28px;" alt="rotating logo for <?php echo the_company_name(); ?>" loading="eager" class="home-options-icon testing">
                      <h3 class="home-options-text black-text"><?php echo the_company_name(); ?></h3>
                    </a>
                  </div>
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb3d-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f5784964fb69525e7c16_question-block-red.gif" alt="" loading="eager" class="home-options-icon about">
                      <h3 class="home-options-text red-text">ABOUT</h3>
                    </a>
                  </div>
                  <div id="w-node-_2cbc4a61-59f6-0e8a-c1dc-4c1a467bfb42-e7baba5b" class="home-options-item">
                    <a href="#" class="home-options-link w-inline-block">
                      <img src="https://uploads-ssl.webflow.com/5ea6f1f7c09557e8d9baba5a/5ea6f5780823a7d756548e06_pager.gif" alt="" loading="eager" class="home-options-icon">
                      <h3 class="home-options-text green-text">CONTACT</h3>
                    </a>
                  </div>
                </div>
              </div>
              <div class="awge-copyright awge-copyright-mobile">
                <div class="awge-copyright-text">© &nbsp;<?php echo date('Y');?> &nbsp;<?php echo the_company_name(); ?></div>
                <a href="#" class="awge-copyright-text">Terms and Conditions</a>
                <a href="#" class="awge-copyright-text">Privacy Policy</a>
              </div>
            </div>
          </div>
        </main>
        <div class="style w-embed">
          <style>
            .awge-content {
              animation: 3.4s linear 0s 1 normal none running turn-on;
            }

            @keyframes turn-on {
              0% {
                transform: scale(1, 0.8) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, 0, 0);
                filter: brightness(30);
                -webkit-filter: brightness(30);
                opacity: 1
              }

              3.5% {
                transform: scale(1, 0.8) translate3d(0, 100%, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, 100%, 0)
              }

              3.6% {
                transform: scale(1, 0.8) translate3d(0, -100%, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, -100%, 0);
                opacity: 1
              }

              9% {
                transform: scale(1.3, 0.6) translate3d(0, 100%, 0);
                -webkit-transform: scale(1.3, 0.6) translate3d(0, 100%, 0);
                filter: brightness(30);
                -webkit-filter: brightness(30);
                opacity: 0
              }

              11% {
                transform: scale(1, 1) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
                filter: contrast(0) brightness(0) saturate(1);
                -webkit-filter: contrast(0) brightness(0) saturate(1);
                opacity: 0
              }

              100% {
                transform: scale(1, 1) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
                filter: contrast(1.075) brightness(1.14) saturate(1.3);
                -webkit-filter: contrast(1.075) brightness(1.14) saturate(1.3);
                opacity: 1
              }
            }

            @-webkit-keyframes turn-on {
              0% {
                transform: scale(1, 0.8) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, 0, 0);
                filter: brightness(30);
                -webkit-filter: brightness(30);
                opacity: 1
              }

              3.5% {
                transform: scale(1, 0.8) translate3d(0, 100%, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, 100%, 0)
              }

              3.6% {
                transform: scale(1, 0.8) translate3d(0, -100%, 0);
                -webkit-transform: scale(1, 0.8) translate3d(0, -100%, 0);
                opacity: 1
              }

              9% {
                transform: scale(1.3, 0.6) translate3d(0, 100%, 0);
                -webkit-transform: scale(1.3, 0.6) translate3d(0, 100%, 0);
                filter: brightness(30);
                -webkit-filter: brightness(30);
                opacity: 0
              }

              11% {
                transform: scale(1, 1) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
                filter: contrast(0) brightness(0) saturate(1);
                -webkit-filter: contrast(0) brightness(0) saturate(1);
                opacity: 0
              }

              100% {
                transform: scale(1, 1) translate3d(0, 0, 0);
                -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
                filter: contrast(1.075) brightness(1.14) saturate(1.3);
                -webkit-filter: contrast(1.075) brightness(1.14) saturate(1.3);
                opacity: 1
              }
            }

            @keyframes turn-off {
              0% {
                transform: scale(1, 1.3) translate3d(0, 0, 0);
                -webkit-filter: brightness(1);
                filter: brightness(1);
                opacity: 1
              }

              60% {
                transform: scale(1.3, 0.001) translate3d(0, 0, 0);
                -webkit-filter: brightness(10);
                filter: brightness(10)
              }

              100% {
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                transform: scale(0, 0.0001) translate3d(0, 0, 0);
                -webkit-filter: brightness(50);
                filter: brightness(50)
              }
            }

            @-webkit-keyframes turn-off {
              0% {
                transform: scale(1, 1.3) translate3d(0, 0, 0);
                -webkit-filter: brightness(1);
                filter: brightness(1);
                opacity: 1
              }

              60% {
                transform: scale(1.3, 0.001) translate3d(0, 0, 0);
                -webkit-filter: brightness(10);
                filter: brightness(10)
              }

              100% {
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                transform: scale(0, 0.0001) translate3d(0, 0, 0);
                -webkit-filter: brightness(50);
                filter: brightness(50)
              }
            }
          </style>
        </div>
        <div class="style w-embed">
          <style>
            .awge-tube-border {
              pointer-events: none !important;
            }

            .awge-tube-shape::after {
              content: ' ';
              display: block;
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
              background: rgba(18, 16, 16, 0.1);
              opacity: 0;
              z-index: 7;
              pointer-events: none;
              animation: flicker 0.15s infinite
            }

            .awge-tube-shape::before {
              content: ' ';
              display: block;
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;
              right: 0;
              background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
              z-index: 7;
              background-size: 100% 2px, 3px 100%;
              pointer-events: none
            }

            @keyframes flicker {
              0% {
                opacity: .02795
              }

              5% {
                opacity: .4421
              }

              10% {
                opacity: .87898
              }

              15% {
                opacity: .36995
              }

              20% {
                opacity: .73915
              }

              25% {
                opacity: .29696
              }

              30% {
                opacity: .0971
              }

              35% {
                opacity: .09559
              }

              40% {
                opacity: .63891
              }

              45% {
                opacity: .31371
              }

              50% {
                opacity: .34936
              }

              55% {
                opacity: .4326
              }

              60% {
                opacity: .482
              }

              65% {
                opacity: .90181
              }

              70% {
                opacity: .38934
              }

              75% {
                opacity: .24511
              }

              80% {
                opacity: .1168
              }

              85% {
                opacity: .84842
              }

              90% {
                opacity: .47071
              }

              95% {
                opacity: .69707
              }

              100% {
                opacity: .30299
              }
            }

            .landing-copyright-text,
            .landing-start-arrow {
              text-shadow: 3px 3px 4px #21285d, 0 0 16px rgba(191, 191, 191, 0.56);
            }
          </style>
        </div>
      </div>
    </div>
  </body>
</html>