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

/* sites/all/themes/perks/templates/legal-pages/node--legal-content.html.twig */
class __TwigTemplate_8a4bde903f56571d61531be9770985010e3efd2f0ef075e7c5b8b3f93e3bc55a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 9];
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
        echo "

  <!-- start page title section -->
  <section class=\"wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xl-8 col-md-6 text-center text-md-left\">
          <!-- start page title -->
          <h1 class=\"alt-font text-white-2 font-weight-600 mb-0 text-uppercase\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</h1>
          <!-- end page title -->
        </div>
        <div
          class=\"col-xl-4 col-md-6 breadcrumb alt-font text-small justify-content-center justify-content-md-end sm-margin-10px-top\">

        </div>
      </div>
    </div>
  </section>
  <!-- end page title section -->
  <section class=\"wow fadeIn\">
    <div class=\"container\">
      ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_legal_main_content", [])), "html", null, true);
        echo "
    </div>
  </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/legal-pages/node--legal-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/legal-pages/node--legal-content.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/legal-pages/node--legal-content.html.twig");
    }
}
