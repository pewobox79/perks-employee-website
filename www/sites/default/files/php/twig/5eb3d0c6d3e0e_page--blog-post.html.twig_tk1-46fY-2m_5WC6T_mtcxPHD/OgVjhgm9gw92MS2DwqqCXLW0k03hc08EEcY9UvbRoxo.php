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

/* sites/all/themes/perks/templates/pages/page--blog-post.html.twig */
class __TwigTemplate_7783082b9cb0641da617f1e7fa61174a463501f1be3cae5f1296e1138b00887f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 68];
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
        // line 68
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
  ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
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
        return "sites/all/themes/perks/templates/pages/page--blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 83,  72 => 68,  55 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"box-layout\">
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
        {{ page.primary_menu }}

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
  {{ page.content }}
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

", "sites/all/themes/perks/templates/pages/page--blog-post.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/pages/page--blog-post.html.twig");
    }
}
