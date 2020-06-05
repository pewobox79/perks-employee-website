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

/* sites/all/themes/perks/templates/webform/webform-block/webform--kontaktformular.html.twig */
class __TwigTemplate_fca3f7dcaf5d260dab62b16e2b6d8f418b96457718ef99196ca26d5882910067 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<h1>heyho</h1>

<form id=\"modal\" action=\"javascript:void(0)\" method=\"post\" class=\"white-popup-block mfp-hide col-lg-3 p-0 mx-auto\">

  <div class=\"padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all\">
    <div class=\"text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom\">Looking for a excellent business idea?</div>
    <div>
      <div id=\"success-contact-form\" class=\"mx-0\"></div>
      <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name*\" class=\"input-bg\">
      <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"E-mail*\" class=\"input-bg\">
      <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" class=\"input-bg\">
      <textarea name=\"comment\" id=\"comment\" placeholder=\"Your Message\" class=\"input-bg\"></textarea>
      <button id=\"contact-us-button\" type=\"submit\" class=\"btn btn-small border-radius-4 btn-black\">send message</button>
    </div>
  </div>
</form>
<!-- end form -->
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/webform/webform-block/webform--kontaktformular.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "sites/all/themes/perks/templates/webform/webform-block/webform--kontaktformular.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/webform/webform-block/webform--kontaktformular.html.twig");
    }
}
