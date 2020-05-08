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

/* sites/all/themes/perks/templates/views/section-one-view/views-view-fields--section-content.html.twig */
class __TwigTemplate_ebc43195e90ed6667ad2e34ff6c1b67d06bb59bd3b9a987e55abfdfc778ba8f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 13];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless'],
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
        echo "<div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn\">
  <h3 class=\"text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-width-100 md-text-middle-line\">
    ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_section_number", []), "content", [])), "html", null, true);
        echo "</h3>
  <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100 sm-width-100\">
    ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "</h5>
</div>
<div class=\"col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow fadeIn\" data-wow-delay=\"0.2s\">
  <img class=\"padding-ten-right md-no-padding-right w-100\" src=\"";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_section_image", []), "content", [])), "html", null, true);
        echo "\" alt=\"\">
</div>
<div class=\"col-12 col-lg-4 col-md-6 text-center text-md-left md-padding-eight-left sm-padding-15px-left wow fadeIn\"
     data-wow-delay=\"0.4s\">
  ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", []), "content", [])), "html", null, true);
        echo "
  <a href=\"";
        // line 13
        ob_start();
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_cta_link", []), "content", [])), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\"
     class=\"alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_cta_link_text", []), "content", [])), "html", null, true);
        echo " <i
      class=\"fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2\"
      aria-hidden=\"true\"></i></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/views/section-one-view/views-view-fields--section-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  81 => 13,  77 => 12,  70 => 8,  64 => 5,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 col-lg-4 text-center text-lg-left md-margin-40px-bottom sm-margin-30px-bottom wow fadeIn\">
  <h3 class=\"text-light-gray alt-font font-weight-600 text-middle-line margin-five-bottom md-margin-5px-bottom w-50 letter-spacing-minus-3 md-width-100 md-text-middle-line\">
    {{ fields.field_section_number.content }}</h3>
  <h5 class=\"text-uppercase alt-font text-extra-dark-gray font-weight-700 width-75 d-block mb-0 lg-width-90 md-width-100 sm-width-100\">
    {{ fields.title.content }}</h5>
</div>
<div class=\"col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow fadeIn\" data-wow-delay=\"0.2s\">
  <img class=\"padding-ten-right md-no-padding-right w-100\" src=\"{{ fields.field_section_image.content }}\" alt=\"\">
</div>
<div class=\"col-12 col-lg-4 col-md-6 text-center text-md-left md-padding-eight-left sm-padding-15px-left wow fadeIn\"
     data-wow-delay=\"0.4s\">
  {{ fields.body.content }}
  <a href=\"{% spaceless %}{{ fields.field_cta_link.content }}{% endspaceless %}\"
     class=\"alt-font text-uppercase font-weight-600 text-link-extra-dark-gray text-deep-pink-hover text-small\">{{ fields.field_cta_link_text.content }} <i
      class=\"fas fa-long-arrow-alt-right margin-5px-left text-deep-pink text-medium position-relative top-2\"
      aria-hidden=\"true\"></i></a>
</div>
", "sites/all/themes/perks/templates/views/section-one-view/views-view-fields--section-content.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/views/section-one-view/views-view-fields--section-content.html.twig");
    }
}
