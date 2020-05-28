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

/* sites/all/themes/perks/templates/footer/region--footer-first.html.twig */
class __TwigTemplate_4a88290909614eb9271cc8bc64d81af651cddfa1935e0d6a589cab2715ecbf45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37];
        $filters = ["escape" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 17
        echo "
<footer id=\"footer\" class=\"footer-modern-dark bg-extra-dark-gray padding-five-tb sm-padding-30px-tb\">
  <div class=\"footer-widget-area padding-40px-bottom sm-padding-30px-bottom\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <!-- start slogan -->
        <div class=\"col-lg-4 text-center text-md-left md-margin-three-bottom sm-margin-20px-bottom\">
          <h6 class=\"text-dark-gray width-70 lg-width-100 no-margin-bottom\">Yessica Wolf</h6>
        </div>
        <!-- end slogan -->
        <!-- start contact information -->
        <div class=\"col-lg-4 col-md-6 text-center text-md-left sm-margin-20px-bottom\">
          <span class=\"display-block\">Am Weingarten 4, 85276 Pfaffenhofen</span>
          <a href=\"mailto:Yessica@naturkosmetik.de\" title=\"sales@domain.com\">Yessica@naturkosmetik.de</a> | +44 (0) 123
          456
          7890
        </div>
        <!-- end contact information -->
        <!-- start legal nav -->

        ";
        // line 37
        if (($context["content"] ?? null)) {
            // line 38
            echo "          <div class=\"col-lg-4 col-md-6 social-style-2 text-center text-md-left\">
            ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 42
        echo "
        <!-- end legal nav -->
      </div>
    </div>
  </div>
  <div class=\"container\">
    <!-- start copyright -->
    <div class=\"footer-bottom border-top border-color-medium-dark-gray padding-40px-top sm-padding-30px-top\">
      <div class=\"row align-items-center\">
        <div class=\"col-md-6 text-md-left text-center text-small\"></div>
        <div class=\"col-md-6 text-md-right text-center text-small\">&copy; 2020 Yessica Wolf</div>
      </div>
    </div>
    <!-- end copyright -->
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/footer/region--footer-first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 42,  82 => 39,  79 => 38,  77 => 37,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/footer/region--footer-first.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/footer/region--footer-first.html.twig");
    }
}
