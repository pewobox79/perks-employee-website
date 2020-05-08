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

/* sites/all/themes/perks/templates/views/skillbar/views-view-unformatted--skillbar-view.html.twig */
class __TwigTemplate_731046158f2ee2ed16c54b22efb5fe53e6a3b405ae25d974239dab482b827b35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 21];
        $filters = ["escape" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        // line 20
        echo "<div class=\"col-12 col-lg-6 offset-lg-1\">
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            echo "      <!-- start progress bar item -->
      <div class=\"skillbar-bar-main skillbar-bar-style2\">
        ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            echo "
      </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div><!--end col-12 offset-lg-1-->
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/views/skillbar/views-view-unformatted--skillbar-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  66 => 24,  62 => 22,  58 => 21,  55 => 20,);
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
* Default theme implementation to display a view of unformatted rows.
*
* Available variables:
* - title: The title of this group of rows. May be empty.
* - rows: A list of the view's row items.
*   - attributes: The row's HTML attributes.
*   - content: The row's content.
* - view: The view object.
* - default_row_class: A flag indicating whether default classes should be
*   used on rows.
*
* @see template_preprocess_views_view_unformatted()
*
* @ingroup themeable
*/
#}
<div class=\"col-12 col-lg-6 offset-lg-1\">
{% for row in rows %}
      <!-- start progress bar item -->
      <div class=\"skillbar-bar-main skillbar-bar-style2\">
        {{ row.content }}
      </div>
{% endfor %}
</div><!--end col-12 offset-lg-1-->
", "sites/all/themes/perks/templates/views/skillbar/views-view-unformatted--skillbar-view.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/views/skillbar/views-view-unformatted--skillbar-view.html.twig");
    }
}
