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

/* sites/all/themes/perks/templates/nodes/node--404-page.html.twig */
class __TwigTemplate_980c2505907243d4d497576b5e73a21551216fef68204bb7a8db50ad6bc945b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 70];
        $functions = ["file_url" => 70];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
        // line 69
        echo "<!-- start page not found section -->
<section id=\"home\" class=\"p-0 parallax mobile-height wow fadeIn\" data-stellar-background-ratio=\"0.5\" style=\"background-image:url('";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_errorpage_bg_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "');\">
  <div class=\"opacity-full bg-extra-dark-gray\"></div>
  <div class=\"container position-relative full-screen\">
    <div class=\"slider-typography text-center\">
      <div class=\"slider-text-middle-main\">
        <div class=\"slider-text-middle\">
          <div class=\"bg-black-opacity-light w-50 mx-auto md-width-80\">
            <div class=\"padding-fifteen-all sm-padding-20px-all\">
              <span class=\"title-extra-large text-white-2 font-weight-600 d-block margin-30px-bottom sm-margin-10px-bottom\">";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</span>
              <h6 class=\"text-uppercase text-deep-pink font-weight-600 alt-font d-block margin-5px-bottom\">";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_errorpage_subtitle", []), "value", [])), "html", null, true);
        echo "</h6>
              <span class=\"text-medium-gray width-60 d-block mx-auto text-large md-width-100\">";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_errorpage_description", []), "value", [])), "html", null, true);
        echo "</span>

              <a href=\"";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_errorpage_backtolink", []), "value", [])), "html", null, true);
        echo "\" class=\"btn btn-transparent-white btn-medium text-extra-small border-radius-4\"><i class=\"ti-arrow-left margin-5px-right ml-0\" aria-hidden=\"true\"></i> Back To Homepage</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end page not found section -->
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/nodes/node--404-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 82,  77 => 80,  73 => 79,  69 => 78,  58 => 70,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/nodes/node--404-page.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/nodes/node--404-page.html.twig");
    }
}
