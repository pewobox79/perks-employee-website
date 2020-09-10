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

/* sites/all/themes/perks/templates/html.html.twig */
class __TwigTemplate_a3c191692c08f55d869f00b4cf3b75ff6a92eb14a2ffcc08ccebcdcc9640ad34 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 55];
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
  <!-- title -->
  <title>Yessica Wolf - Network Marketing</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1\"/>
  <meta name=\"author\" content=\"ThemeZaa\">
  <!-- description -->
  <meta name=\"description\"
        content=\"POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.\">
  <!-- keywords -->
  <meta name=\"keywords\"
        content=\"creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq\">
  <!-- favicon -->
  <link rel=\"shortcut icon\" href=\"sites/all/themes/perks/images/favicon.png\">
  <link rel=\"apple-touch-icon\" href=\"sites/all/themes/perks/images/apple-touch-icon-57x57.png\">
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"sites/all/themes/perks/images/apple-touch-icon-72x72.png\">
  <link rel=\"apple-touch-icon\" sizes=\"114x114\"
        href=\"sites/all/themes/perks/images/apple-touch-icon-114x114.png\">
  <!-- animation -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/animate.css\"/>
  <!-- bootstrap -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/bootstrap.min.css\"/>
  <!-- et line icon -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/et-line-icons.css\"/>
  <!-- font-awesome icon -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/font-awesome.min.css\"/>
  <!-- themify icon -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/themify-icons.css\">
  <!-- swiper carousel -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/swiper.min.css\">
  <!-- justified gallery  -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/justified-gallery.min.css\">
  <!-- magnific popup -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/magnific-popup.css\"/>
  <!-- revolution slider -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/sites/all/themes/perks/revolution/css/settings.css\"
        media=\"screen\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/sites/all/themes/perks/revolution/css/layers.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"/sites/all/themes/perks/revolution/css/navigation.css\">
  <!-- bootsnav -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/bootsnav.css\">
  <!-- style -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/style.css\"/>
  <!-- responsive css -->
  <link rel=\"stylesheet\" href=\"/sites/all/themes/perks/css/responsive.css\"/>
  <!--[if IE]>
  <script src=\"/sites/all/themes/perks/js/html5shiv.js\"></script>
  <![endif]-->
    </head>
<body>

";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "


<!-- start scroll to top -->
<a class=\"scroll-top-arrow\" href=\"javascript:void(0);\"><i class=\"ti-arrow-up\"></i></a>
<!-- end scroll to top  -->

  <!-- javascript libraries -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/modernizr.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/bootstrap.bundle.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.easing.1.3.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/skrollr.min.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/smooth-scroll.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.appear.js\"></script>
  <!-- menu navigation -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/bootsnav.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.nav.js\"></script>
  <!-- animation -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/wow.min.js\"></script>
  <!-- page scroll -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/page-scroll.js\"></script>
  <!-- swiper carousel -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/swiper.min.js\"></script>
  <!-- counter -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.count-to.js\"></script>
  <!-- parallax -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.stellar.js\"></script>
  <!-- magnific popup -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.magnific-popup.min.js\"></script>
  <!-- portfolio with shorting tab -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/isotope.pkgd.min.js\"></script>
  <!-- images loaded -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/imagesloaded.pkgd.min.js\"></script>
  <!-- pull menu -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/classie.js\"></script>
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/hamburger-menu.js\"></script>
  <!-- counter  -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/counter.js\"></script>
  <!-- fit video  -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.fitvids.js\"></script>
  <!-- skill bars  -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/skill.bars.jquery.js\"></script>
  <!-- justified gallery  -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/justified-gallery.min.js\"></script>
  <!--pie chart-->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/jquery.easypiechart.min.js\"></script>
  <!-- instagram -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/instafeed.min.js\"></script>
  <!-- retina -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/retina.min.js\"></script>
  <!-- revolution -->
  <script type=\"text/javascript\"
          src=\"/sites/all/themes/perks/revolution/js/jquery.themepunch.tools.min.js\"></script>
  <script type=\"text/javascript\"
          src=\"/sites/all/themes/perks/revolution/js/jquery.themepunch.revolution.min.js\"></script>
  <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
  <!--<script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.actions.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.carousel.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.kenburn.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.layeranimation.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.migration.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.navigation.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.parallax.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.slideanims.min.js\"></script>
  <script type=\"text/javascript\" src=\"revolution/js/extensions/revolution.extension.video.min.js\"></script>-->
  <!-- setting -->
  <script type=\"text/javascript\" src=\"/sites/all/themes/perks/js/main.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 55,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/html.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/html.html.twig");
    }
}
