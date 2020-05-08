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

/* sites/all/themes/perks/templates/views/team-view/views-view-grid--team-overview.html.twig */
class __TwigTemplate_188245a1cc1415f84d9341933cac64b69d8330cd36281fead74ca4241b603c5d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 31];
        $filters = ["escape" => 35];
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
        // line 29
        echo "<div class=\"col-12 col-lg-8\">
  <div class=\"row\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", []));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 33
                echo "        <div
          class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\">
          ";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/views/team-view/views-view-grid--team-overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  81 => 38,  72 => 35,  68 => 33,  63 => 32,  59 => 31,  55 => 29,);
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
 * Default theme implementation for views to display rows in a grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rendered view results.
 * - options: The view plugin style options.
 *   - row_class_default: A flag indicating whether default classes should be
 *     used on rows.
 *   - col_class_default: A flag indicating whether default classes should be
 *     used on columns.
 * - items: A list of grid items. Each item contains a list of rows or columns.
 *   The order in what comes first (row or column) depends on which alignment
 *   type is chosen (horizontal or vertical).
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid()
 *
 * @ingroup themeable
 */
#}
<div class=\"col-12 col-lg-8\">
  <div class=\"row\">
    {% for row in items %}
      {% for column in row.content %}
        <div
          class=\"col-12 col-lg-4 col-md-6 team-block text-left team-style-1 margin-six-bottom md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp\">
          {{ column.content }}
        </div>
      {% endfor %}
    {% endfor %}
  </div>
</div>
", "sites/all/themes/perks/templates/views/team-view/views-view-grid--team-overview.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/views/team-view/views-view-grid--team-overview.html.twig");
    }
}
