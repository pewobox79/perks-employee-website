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
          <a href=\"http://www.perks.test\" title=\"Yessica Wolf\" class=\"logo\"><img src=\"/sites/all/themes/perks/images/logo.png\"
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
  <!-- start form -->
  <form id=\"modal\" action=\"javascript:void(0)\" method=\"post\" class=\"white-popup-block mfp-hide col-lg-3 p-0 mx-auto\">
    <h1>Happy Birthday</h1>
    <div class=\"padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all\">
      <div class=\"text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom\">Looking for a excellent business idea?</div>
      <div>
        <div id=\"success-contact-form\" class=\"\"></div>
        <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name*\" class=\"input-bg\">
        <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"E-mail*\" class=\"input-bg\">
        <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" class=\"input-bg\">
        <textarea name=\"comment\" id=\"comment\" placeholder=\"Your Message\" class=\"input-bg\"></textarea>
        <button id=\"contact-us-button\" type=\"submit\" class=\"btn btn-small border-radius-4 btn-black\">send message</button>
      </div>
    </div>
  </form>
  <!-- end form -->
  <!-- start section first -->
  ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_first", [])), "html", null, true);
        echo "
  <!--end section first-->

  <!-- start section second -->
  ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_second", [])), "html", null, true);
        echo "
  <!--end secition second-->

  <!-- start blog section -->
  ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "blog_section", [])), "html", null, true);
        echo "
  <!-- end blog section -->

  <!-- start team section -->
  ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "section_third", [])), "html", null, true);
        echo "

  <!-- start footer -->
  ";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
  <!-- end footer -->
</div>

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
        return array (  135 => 116,  129 => 113,  122 => 109,  115 => 105,  108 => 101,  73 => 69,  55 => 53,);
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
