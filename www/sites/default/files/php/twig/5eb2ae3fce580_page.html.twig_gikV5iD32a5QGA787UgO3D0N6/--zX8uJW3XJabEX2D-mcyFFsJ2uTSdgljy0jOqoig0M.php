<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sites/all/themes/perks/templates/page.html.twig */
class __TwigTemplate_b961d677a734c7db343fde4a96dc4e367da7ecc3e61683405ee4212ede49cab6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 53
        echo "<div class=\"box-layout\">
  <!-- start header -->
  <header>
    <!-- start navigation -->
    <nav class=\"navbar navbar-default bootsnav background-white header-light navbar-scroll-top navbar-expand-lg\">
      <div class=\"container nav-header-container\">
        <!-- start logo -->
        <div class=\"col-auto pl-lg-0\">
          <a href=\"index.html\" title=\"Pofo\" class=\"logo\"><img src=\"/sites/all/themes/perks/images/logo.png\"
                                                              data-rjs=\"/sites/all/themes/perks/images/logo@2x.png\"
                                                              class=\"logo-dark default\" alt=\"Pofo\"><img
              src=\"images/logo-white.png\" data-rjs=\"images/logo-white@2x.png\" alt=\"Pofo\"
              class=\"logo-light\"></a>
        </div>
        <!-- end logo -->

        ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "

        <div class=\"col-auto pr-lg-0\">
          <div class=\"header-social-icon d-none d-md-inline-block\">
            <a href=\"https://www.facebook.com/yessica.wolf\" title=\"Facebook\" target=\"_blank\"><i
                class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i></a>
            <a href=\"https://www.instagram.com/yessicawolf/\" title=\"Instagram\" target=\"_blank\"><i
                class=\"fab fa-instagram\"></i></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
  </header>
  <!-- end header -->
  <!-- start slider section -->
  <section id=\"me\" class=\"wow fadeIn p-0 main-slider h-100 mobile-height\">
    <div class=\"swiper-full-screen swiper-container h-100 w-100 black-move\">
      <div class=\"swiper-wrapper\">
        <!-- start slider item -->
        <div class=\"swiper-slide cover-background sm-background-image-center\"
             style=\"background-image:url('images/header-images/networkmarketing-ist-modern.png');\">
          <div class=\"container-fluid slider-half-screen position-relative\">
            <div class=\"slider-typography text-left\">
              <div class=\"slider-text-middle-main\">
                <div class=\"slider-text-middle padding-ten-left sm-padding-five-left\">
                  <span class=\"text-middle-line text-deep-pink d-block width-20 md-text-middle-line sm-width-50\">Business &amp; Familie geht!</span>
                  <span
                    class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb d-block letter-spacing-minus-2 md-width-60\">Yesscia Wolf</span>
                  <a href=\"single-project-page-01.html\" class=\"btn btn-small btn-dark-gray\">Wir sollten sprechen</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class=\"swiper-slide cover-background sm-background-image-center\"
             style=\"background-image:url('images/header-images/fokus-und-ziele.png');\">
          <div class=\"container-fluid slider-half-screen position-relative\">
            <div class=\"slider-typography text-left\">
              <div class=\"slider-text-middle-main\">
                <div class=\"slider-text-middle padding-ten-left sm-padding-five-left\">
                  <span class=\"text-middle-line text-deep-pink d-block width-20 md-text-middle-line sm-width-50\">Fokus und Ziele</span>
                  <span
                    class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-width-60\">Was suchst du?</span>
                  <a href=\"single-project-page-02.html\" class=\"btn btn-small btn-dark-gray\">Finde heraus, was ich
                    meine</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class=\"swiper-slide cover-background sm-background-image-center\"
             style=\"background-image:url('images/header-images/sympathisch-und-frisch.png');\">
          <div class=\"container-fluid slider-half-screen position-relative\">
            <div class=\"slider-typography text-left\">
              <div class=\"slider-text-middle-main\">
                <div class=\"slider-text-middle padding-ten-left sm-padding-five-left\">
                  <span class=\"text-middle-line text-deep-pink d-block width-20 md-text-middle-line sm-width-50\">Erfülle Deine Träume</span>
                  <span
                    class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-width-60\">Reutter Craft</span>
                  <a href=\"single-project-page-03.html\" class=\"btn btn-small btn-dark-gray\">Explore
                    Work</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
      </div>
      <!-- Add Pagination -->
      <div class=\"swiper-pagination swiper-pagination-square swiper-full-screen-pagination\"></div>
      <div class=\"swiper-button-next swiper-button-black-highlight d-none\"></div>
      <div class=\"swiper-button-prev swiper-button-black-highlight d-none\"></div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- start section first -->
  ";
        // line 151
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_first", [])), "html", null, true);
        echo "
  <!--end section first-->

  <!-- start section second -->
  ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_second", [])), "html", null, true);
        echo "
  <!--end secition second-->

  <!-- start blog section -->
  <section id=\"news\" class=\"border-top border-color-extra-light-gray wow fadeIn\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-50px-bottom\">
          <h3 class=\"text-light-gray alt-font text-middle-line font-weight-600 margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-width-100 md-text-middle-line\">
            03</h3>
          <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100\">
            Was gibt es Neues?</h5>
        </div>
        <div class=\"col-12 col-lg-8\">
          <div class=\"row\">
            <!-- start post item -->
            <div class=\"col-12 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp\">
              <div class=\"blog-post blog-post-style1 text-md-left text-center\">
                <div class=\"blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom\">
                  <a href=\"blog-post-layout-01.html\">
                    <img src=\"images/event-bilder/ringana-fresh-date-pfaffenhofen.png\" alt=\"\">
                  </a>
                </div>
                <div class=\"post-details\">
                                    <span class=\"post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom\">17 Februar 2020 |  <a
                                        href=\"blog-masonry.html\" class=\"text-medium-gray\">Fresh Date</a></span>
                  <a href=\"blog-post-layout-01.html\"
                     class=\"post-title text-medium text-extra-dark-gray width-90 d-block md-width-100\">Fresh Dates bringen Euch unseren Partner RINGANA näher. Wir stellen Euch neben dem einzigartigen Geschäftsmodel auf Wunsch auch einzelne Produkte vor.</a>
                </div>
              </div>
            </div>
            <!-- end post item -->
            <!-- start post item -->
            <div class=\"col-12 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.2s\">
              <div class=\"blog-post blog-post-style1 text-md-left text-center\">
                <div class=\"blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom\">
                  <a href=\"blog-post-layout-02.html\">
                    <img src=\"images/event-bilder/partner-event-yessica-wolf.png\" alt=\"\">
                  </a>
                </div>
                <div class=\"post-details\">
                                    <span class=\"post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom\">03 July 2020 | <a
                                        href=\"blog-masonry.html\" class=\"text-medium-gray\">Partner Event</a></span>
                  <a href=\"blog-post-layout-02.html\"
                     class=\"post-title text-medium text-extra-dark-gray width-90 d-block md-width-100\">Vertiefen der Partnerschaften und der Austausch von Erfahrungen mit dem Ziel, sich gegenseitig zu motivieren</a>
                </div>
              </div>
            </div>
            <!-- end post item -->
            <!-- start post item -->
            <div class=\"col-12 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.4s\">
              <div class=\"blog-post blog-post-style1 text-md-left text-center\">
                <div class=\"blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom\">
                  <a href=\"blog-post-layout-03.html\">
                    <img src=\"images/event-bilder/team-event-yessica-wolf.png\" alt=\"\">
                  </a>
                </div>
                <div class=\"post-details\">
                                    <span class=\"post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom\">22 June 2017 | <a
                                        href=\"blog-masonry.html\" class=\"text-medium-gray\">Team Event</a></span>
                  <a href=\"blog-post-layout-03.html\"
                     class=\"post-title text-medium text-extra-dark-gray width-90 d-block md-width-100\">Das Team Event ist eine exklusive Plattform für alle Mitglieder des Team Wolf und deren RINGANA Interessenten. In diesem Rahmen ist der Fokus auf individuellen Gesprächen!</a>
                </div>
              </div>
            </div>
            <!-- end post item -->
            <!-- start post item -->
            <div class=\"col-12 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.6s\">
              <div class=\"blog-post blog-post-style1 text-md-left text-center\">
                <div class=\"blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom\">
                  <a href=\"blog-post-layout-04.html\">
                    <img src=\"http://placehold.it/700x403\" alt=\"\">
                  </a>
                </div>
                <div class=\"post-details\">
                                    <span class=\"post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom\">02 June 2017 | by <a
                                        href=\"blog-masonry.html\"
                                        class=\"text-medium-gray\">Jennifer Freeman</a></span>
                  <a href=\"blog-post-layout-04.html\"
                     class=\"post-title text-medium text-extra-dark-gray width-90 d-block md-width-100\">I
                    wish someone would ask me to design a cathedral.</a>
                </div>
              </div>
            </div>
            <!-- end post item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end blog section -->
  <!-- start team section -->
  ";
        // line 250
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_third", [])), "html", null, true);
        echo "

</div>
<!-- start footer -->
<footer id=\"footer\" class=\"footer-modern-dark bg-extra-dark-gray padding-five-tb sm-padding-30px-tb\">
  <div class=\"footer-widget-area padding-40px-bottom sm-padding-30px-bottom\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <!-- start slogan -->
        <div class=\"col-lg-4 text-center text-md-left md-margin-three-bottom sm-margin-20px-bottom\">
          <h6 class=\"text-dark-gray width-70 lg-width-100 no-margin-bottom\">London Based Creative Studio</h6>
        </div>
        <!-- end slogan -->
        <!-- start contact information -->
        <div class=\"col-lg-4 col-md-6 text-center text-md-left sm-margin-20px-bottom\">
          <span class=\"display-block\">301 The Greenhouse,<br>Custard Factory, London, E2 8DY.</span>
          <a href=\"mailto:sales@domain.com\" title=\"sales@domain.com\">sales@domain.com</a> | +44 (0) 123 456
          7890
        </div>
        <!-- end contact information -->
        <!-- start social media -->
        <div class=\"col-lg-4 col-md-6 social-style-2 text-center text-md-left\">
          <a href=\"index.html\"><img class=\"footer-logo\" src=\"images/logo-white.png\"
                                    data-rjs=\"images/logo-white@2x.png\" alt=\"Pofo\"></a>
          <div class=\"social-icon-style-8\">
            <ul class=\"text-extra-small margin-20px-top sm-no-margin-bottom text-uppercase p-0 mb-0 list-unstyled\">
              <li class=\"d-inline-block margin-10px-right\"><a href=\"http://twitter.com\" target=\"_blank\"
                                                              title=\"Twitter\">Twitter</a></li>
              <li class=\"d-inline-block margin-10px-right\"><a href=\"http://facebook.com\" target=\"_blank\"
                                                              title=\"Facebook\">Facebook</a></li>
              <li class=\"d-inline-block margin-10px-right\"><a href=\"http://instagram.com\" target=\"_blank\"
                                                              title=\"Instagram\">Instagram</a></li>
              <li class=\"d-inline-block\"><a href=\"http://dribbble.com\" target=\"_blank\" title=\"Dribbble\">Dribbble</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end social media -->
      </div>
    </div>
  </div>
  <div class=\"container\">
    <!-- start copyright -->
    <div class=\"footer-bottom border-top border-color-medium-dark-gray padding-40px-top sm-padding-30px-top\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-6 text-md-left text-center text-small\">POFO - Portfolio Concept Theme</div>
        <div class=\"col-md-6 text-md-right text-center text-small\">&copy; 2019 POFO is Proudly Powered by <a
            href=\"http://www.themezaa.com\" target=\"_blank\" title=\"ThemeZaa\">ThemeZaa</a></div>
      </div>
    </div>
    <!-- end copyright -->
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 250,  165 => 155,  158 => 151,  73 => 69,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/page.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/page.html.twig");
    }
}
