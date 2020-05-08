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

/* sites/all/themes/perks/templates/menu--main.html.twig */
class __TwigTemplate_d9158588aa355c1a9f5b21c67643e6c21d3775899005bf1a30bdb8ec0f5bf0b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 23, "macro" => 38, "if" => 40, "for" => 48];
        $filters = ["escape" => 50];
        $functions = ["link" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link']
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
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "
<div class=\"col accordion-menu pr-0 pr-md-3\">
  <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\"
          data-target=\"#navbar-collapse-toggle-1\">
    <span class=\"sr-only\">toggle navigation</span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
  </button>
  ";
        // line 61
        echo "
</div> <!--/col accordion-menu-->
";
    }

    // line 38
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 39
            echo "    ";
            $context["menus"] = $this;
            // line 40
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 41
                echo "      <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbar-collapse-toggle-1\">
      ";
                // line 42
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 43
                    echo "        <ul id=\"accordion\" class=\"nav navbar-nav navbar-left no-margin alt-font text-normal\"
        data-in=\"fadeIn\" data-out=\"fadeOut\">
      ";
                } else {
                    // line 46
                    echo "        <ul>
      ";
                }
                // line 48
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "        <li class=\"dropdown\">
          ";
                    // line 50
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    echo "
          ";
                    // line 51
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 52
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
          ";
                    }
                    // line 54
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "      </ul>
    ";
            }
            // line 58
            echo "    </ul>
    </div><!--/navbar-collapse-->
  ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  139 => 56,  132 => 54,  126 => 52,  124 => 51,  120 => 50,  117 => 49,  112 => 48,  108 => 46,  103 => 43,  101 => 42,  98 => 41,  95 => 40,  92 => 39,  78 => 38,  72 => 61,  60 => 29,  57 => 24,  55 => 23,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}
<div class=\"col accordion-menu pr-0 pr-md-3\">
  <button type=\"button\" class=\"navbar-toggler collapsed\" data-toggle=\"collapse\"
          data-target=\"#navbar-collapse-toggle-1\">
    <span class=\"sr-only\">toggle navigation</span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
  </button>
  {% macro menu_links(items, attributes, menu_level) %}
    {% import _self as menus %}
    {% if items %}
      <div class=\"navbar-collapse collapse justify-content-end\" id=\"navbar-collapse-toggle-1\">
      {% if menu_level == 0 %}
        <ul id=\"accordion\" class=\"nav navbar-nav navbar-left no-margin alt-font text-normal\"
        data-in=\"fadeIn\" data-out=\"fadeOut\">
      {% else %}
        <ul>
      {% endif %}
      {% for item in items %}
        <li class=\"dropdown\">
          {{ link(item.title, item.url) }}
          {% if item.below %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
          {% endif %}
        </li>
      {% endfor %}
      </ul>
    {% endif %}
    </ul>
    </div><!--/navbar-collapse-->
  {% endmacro %}

</div> <!--/col accordion-menu-->
", "sites/all/themes/perks/templates/menu--main.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/menu--main.html.twig");
    }
}
