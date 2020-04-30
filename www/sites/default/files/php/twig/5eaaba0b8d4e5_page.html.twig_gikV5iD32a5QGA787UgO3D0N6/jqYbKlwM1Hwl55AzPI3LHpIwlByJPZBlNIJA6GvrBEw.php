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
                  <span class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb d-block letter-spacing-minus-2 md-width-60\">Yesscia Wolf</span>
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
                  <span class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-width-60\">Was suchst du?</span>
                  <a href=\"single-project-page-02.html\" class=\"btn btn-small btn-dark-gray\">Finde heraus, was ich meine</a>
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
                  <span class=\"title-large alt-font text-extra-dark-gray font-weight-700 width-25 margin-40px-tb sm-margin-20px-tb margin-two-tb d-block letter-spacing-minus-2 md-width-60\">Reutter Craft</span>
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
  <!-- start about section -->
  <section id=\"business\" class=\"wow fadeIn\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn\">
          <h3 class=\"text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-width-100 md-text-middle-line\">
            01</h3>
          <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100 sm-width-100\">
            Beruf &amp; Familie</h5>
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow fadeIn\" data-wow-delay=\"0.2s\">
          <img class=\"padding-ten-right md-no-padding-right w-100\" src=\"images/section-images/familie-und-business-vereint.png\" alt=\"\">
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 text-center text-md-left md-padding-eight-left sm-padding-15px-left wow fadeIn\"
             data-wow-delay=\"0.4s\">
          <p class=\"text-large text-extra-dark-gray\">We always stay on the cutting edge of digital, so that
            our clients maintain their competitive advantage online.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            1500s. Lorem Ipsum is simply dummy text.</p>
          <a href=\"about-us-classic.html\"
             class=\"alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small\">Erfahre mehr über Deine Freiheit <i
              class=\"fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2\"
              aria-hidden=\"true\"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->
  <!-- start skills section -->
  <section class=\"wow fadeIn bg-light-gray\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12 col-lg-5 md-margin-50px-bottom sm-margin-30px-bottom text-center text-lg-left\">
          <p class=\"text-large text-extra-dark-gray\">Meine Vision ist es, allen Menschen ein gutes Leben in einer besseren und gesünderen Welt zu ermöglichen.
          </p>
          <p>Das ist mein Anspruch der sich auch in der Wahl meiner Partner wiederspiegelt. Nur mit Produkten aus nachhaltigen Erzeugnissen kann das gelingen. </p>
          <a href=\"services-modern.html\"
             class=\"alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small\">Meine Vision<i
              class=\"fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2\"
              aria-hidden=\"true\"></i></a>
        </div>
        <div class=\"col-12 col-lg-6 offset-lg-1\">
          <!-- start progress bar item -->
          <div class=\"skillbar-bar-main skillbar-bar-style2\">
            <!-- start progress bar item -->
            <div class=\"skillbar margin-45px-bottom\" data-percent=\"100%\">
              <span class=\"skill-bar-text text-extra-small text-uppercase text-dark-gray\">Frische</span>
              <p class=\"skillbar-bar\"></p>
              <span class=\"skill-bar-percent text-small\"></span>
            </div>
            <!-- end progress bar item -->
            <!-- start progress bar item -->
            <div class=\"skillbar margin-45px-bottom\" data-percent=\"100%\">
              <span class=\"skill-bar-text text-extra-small text-uppercase text-dark-gray\">Ethik</span>
              <p class=\"skillbar-bar\"></p>
              <span class=\"skill-bar-percent text-small\"></span>
            </div>
            <!-- end progress bar item -->
            <!-- start progress bar item -->
            <div class=\"skillbar margin-45px-bottom\" data-percent=\"100%\">
              <span class=\"skill-bar-text text-extra-small text-uppercase text-dark-gray\">Konsequent</span>
              <p class=\"skillbar-bar\"></p>
              <span class=\"skill-bar-percent text-small\"></span>
            </div>
            <!-- end progress bar item -->
            <!-- start progress bar item -->
            <div class=\"skillbar\" data-percent=\"100%\">
              <span class=\"skill-bar-text text-extra-small text-uppercase text-dark-gray\">Wirkstoffe</span>
              <p class=\"skillbar-bar\"></p>
              <span class=\"skill-bar-percent text-small\"></span>
            </div>
            <!-- end progress bar item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end skills section -->
  <!-- start section -->
  <section id=\"nachhaltig\" class=\"wow fadeIn\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn\">
          <h3 class=\"text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 md-width-100 letter-spacing-minus-3 md-text-middle-line\">
            02</h3>
          <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100\">
            Werte und Überzeugungen</h5>
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow fadeIn\">
          <img class=\"padding-ten-right md-no-padding-right w-100\" src=\"images/section-images/marketing-und-events-yessica-wolf.png\" alt=\"\">
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 text-center text-md-left md-padding-eight-left sm-padding-15px-left wow fadeIn\">
          <p class=\"text-large text-extra-dark-gray\">We have our own developers and technical producers who
            can confidently integrate & execute ideas.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the
            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            1500s. Lorem Ipsum is simply dummy text.</p>
          <a href=\"team-classic.html\"
             class=\"alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small\">Our
            Creative People <i
              class=\"fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2\"
              aria-hidden=\"true\"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start  portfolio section -->
  <section class=\"wow fadeIn py-0\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"filter-content overflow-hidden\">
            <ul class=\"portfolio-grid portfolio-metro-grid work-4col hover-option5 gutter-medium\">
              <li class=\"grid-sizer\"></li>
              <!-- start portfolio item -->
              <li class=\"grid-item wow zoomIn\">
                <a href=\"single-project-page-01.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Tailoring Interior</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Branding and Brochure</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item grid-item-double wow zoomIn\" data-wow-delay=\"0.2s\">
                <a href=\"single-project-page-02.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Herbal Beauty Salon</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Branding and Identity</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item wow zoomIn\" data-wow-delay=\"0.4s\">
                <a href=\"single-project-page-03.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Pixflow Studio</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Branding and Identity</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item wow zoomIn\">
                <a href=\"single-project-page-04.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Educamp School</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Branding and Identity</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item grid-item-double wow zoomIn\">
                <a href=\"single-project-page-05.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">HardDot Stone</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Branding and Identity</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item wow zoomIn\" data-wow-delay=\"0.2s\">
                <a href=\"single-project-page-06.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Designblast Inc</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Web and Photography</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
              <!-- start portfolio item -->
              <li class=\"grid-item grid-item-double wow zoomIn\" data-wow-delay=\"0.2s\">
                <a href=\"single-project-page-07.html\">
                  <figure>
                    <div class=\"portfolio-img\"><img src=\"http://placehold.it/770x788\" alt=\"\"/></div>
                    <figcaption>
                      <div class=\"portfolio-hover-main text-center\">
                        <div class=\"portfolio-hover-box vertical-align-middle\">
                          <div class=\"portfolio-hover-content position-relative last-paragraph-no-margin\">
                            <div class=\"bg-deep-pink mx-auto separator-line-horrizontal-medium-light2 position-relative\"></div>
                            <span class=\"font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom display-block\">Designblast Inc</span>
                            <p class=\"text-medium-gray letter-spacing-1 text-uppercase text-extra-small\">
                              Web and Photography</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end portfolio section -->
  <!-- start team section -->
  <section id=\"team\" class=\"wow fadeIn\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 md-margin-40px-bottom sm-margin-30px-bottom text-center text-lg-left\">
          <h3 class=\"text-light-gray alt-font text-middle-line font-weight-600 margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 text-center text-lg-left md-width-100 md-text-middle-line\">
            03</h3>
          <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100\">
            Lerne das Team Wolf näher kennen</h5>
        </div>
        <div class=\"col-12 col-lg-8\">
          <div class=\"row\">
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"/sites/all/themes/perks/images/section-images/marketing-und-events-yessica-wolf.png\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Yessica Wolf</div>
                    <div class=\"text-extra-small text-medium-gray\">Mentorin</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.2s\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"/sites/all/themes/perks/images/section-images/team-wolf/team-wolf-franziska-fechner.png\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Franzi Fechner</div>
                    <div class=\"text-extra-small text-medium-gray\">Marketing &amp; Event</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.4s\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"http://placehold.it/700x892\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Zuzi </div>
                    <div class=\"text-extra-small text-medium-gray\">Vertrieb &amp; Ernährung</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"http://placehold.it/700x892\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Peter Wolf</div>
                    <div class=\"text-extra-small text-medium-gray\">Digital &amp; Trainer</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 sm-margin-30px-bottom wow fadeInUp\"
                 data-wow-delay=\"0.2s\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"http://placehold.it/700x892\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Jhon Macleod</div>
                    <div class=\"text-extra-small text-medium-gray\">Creative Director</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
            <!-- our team item -->
            <div class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 wow fadeInUp\"
                 data-wow-delay=\"0.4s\">
              <figure>
                <div class=\"team-image sm-width-100\">
                  <img src=\"http://placehold.it/700x892\" alt=\"\">
                  <div class=\"overlay-content text-center d-flex align-items-center justify-content-center\">
                    <div class=\"icon-social-small\">
                      <a href=\"http://www.facebook.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                      <a href=\"http://www.twitter.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                      <a href=\"http://www.plus.google.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a>
                      <a href=\"http://www.instagram.com\" class=\"text-white-2 text-white-2-hover\"
                         target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                  </div>
                  <div class=\"team-overlay bg-deep-pink opacity8\"></div>
                </div>
                <figcaption>
                  <div class=\"team-member-position text-uppercase text-extra-dark-gray text-lg-left text-center margin-20px-top sm-margin-15px-top\">
                    <div class=\"text-small line-height-22 font-weight-500\">Joshua Brewer</div>
                    <div class=\"text-extra-small text-medium-gray\">Creative Studio Head</div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <!-- end our team item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- start blog section -->
  <section id=\"treffen\" class=\"border-top border-color-extra-light-gray wow fadeIn\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-50px-bottom\">
          <h3 class=\"text-light-gray alt-font text-middle-line font-weight-600 margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-width-100 md-text-middle-line\">
            04</h3>
          <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100\">
            Hier kannst du uns Treffen</h5>
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
        return array (  73 => 69,  55 => 53,);
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
