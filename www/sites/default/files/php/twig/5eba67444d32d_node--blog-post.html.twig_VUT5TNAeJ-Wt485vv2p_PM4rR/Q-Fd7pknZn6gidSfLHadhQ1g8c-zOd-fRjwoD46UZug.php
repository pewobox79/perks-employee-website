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

/* sites/all/themes/perks/templates/nodes/node--blog-post.html.twig */
class __TwigTemplate_b2f6c781bd27e173495bec1b51f3701cab1ba2035d1788d8f2ddaa84f6054b77 extends \Twig\Template
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
        echo "<!-- start page title section -->
<section class=\"wow fadeIn parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image:url('";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_blog_header_image", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "');\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-12 d-flex justify-content-center flex-column text-center one-second-screen page-title-large\">
        <!-- start page title -->
        <h1 class=\"text-white-2 alt-font font-weight-600 margin-10px-bottom\">";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", []), "value", [])), "html", null, true);
        echo "</h1>
        <!-- end page title -->
        <!-- start sub title -->
        <span class=\"text-white-2 opacity6 alt-font text-uppercase text-small\">25 April 2017&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by <a href=\"";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_blog_header_image", []), "value", [])), "html", null, true);
        echo "\" class=\"text-white-2\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article_creator", []), "value", [])), "html", null, true);
        echo "</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href=\"blog-masonry.html\" class=\"text-white-2\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article_categorie", []), "value", [])), "html", null, true);
        echo "</a></span>
        <!-- end sub title -->
      </div>
    </div>
  </div>
</section>
<!-- end page title section -->
<!-- start blog content section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 last-paragraph-no-margin text-center text-md-left\">
        <h5 class=\"font-weight-600 text-extra-dark-gray alt-font\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article_subline", []), "value", [])), "html", null, true);
        echo "</h5>
        <p>";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article_description", []), "value", [])), "html", null, true);
        echo "</p>
      </div>
      <div class=\"col-12\">
        <img src=\"";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_article_image_centered", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" alt=\"\" class=\"width-100 margin-50px-tb\">
      </div>
      <div class=\"col-12 text-center text-md-left\">
        <div class=\"row mx-0\">
          <div class=\"col-12 col-lg-6 pl-0 last-paragraph-no-margin md-margin-30px-bottom sm-no-padding-lr\">
            <span class=\"text-extra-dark-gray font-weight-600 alt-font margin-10px-bottom d-block text-medium\">";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_left_content_first_header", []), "value", [])), "html", null, true);
        echo "</span>
            <p class=\"width-90 sm-width-100\">";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_left_content_first", []), "value", [])), "html", null, true);
        echo " </p>
          </div>
          <div class=\"col-12 col-lg-6 pl-0 last-paragraph-no-margin sm-no-padding-lr\">
            <span class=\"text-extra-dark-gray font-weight-600 alt-font margin-10px-bottom d-block text-medium\">";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_right_content_first_header", []), "value", [])), "html", null, true);
        echo "</span>
            <p class=\"width-90 sm-width-100\">";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_right_content_first", []), "value", [])), "html", null, true);
        echo "  </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end blog content section -->
<!-- start parallax section
<section class=\"wow fadeIn parallax big-section\" data-stellar-background-ratio=\"0.4\" style=\"background-image: url('http://placehold.it/1920x1100')\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8 col-md-10 mx-auto\">
        <div class=\"bg-white padding-nine-all text-center\">
          <div class=\"alt-font text-medium-gray margin-15px-bottom text-uppercase text-small\">About restaurants Photography</div>
          <h5 class=\"font-weight-600 alt-font text-extra-dark-gray\">Taking an image, freezing a moment, reveals how rich reality truly</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <a href=\"portfolio-full-width-image-gallery.html\" class=\"btn btn-small btn-dark-gray margin-10px-top sm-no-margin-top\">Explore Photography</a>
        </div>
      </div>
    </div>
  </div>
</section>
 end parallax section -->
<!-- start section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center text-md-left\">

        <figure class=\"wp-caption alignright\"><img alt=\"\" src=\"";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image_content_second", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\"><figcaption class=\"wp-caption-text\">bildunterschrift</figcaption></figure>
        <span class=\"text-medium alt-font font-weight-600 margin-20px-bottom d-block text-extra-dark-gray\">";
        // line 137
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_second_header", []), "value", [])), "html", null, true);
        echo "</span>
        <p>";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_second", []), "value", [])), "html", null, true);
        echo "</p>

        <figure class=\"wp-caption alignleft\"><img alt=\"\" src=\"";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_image_content_third", []), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\"><figcaption class=\"wp-caption-text\">bildunterschrift</figcaption></figure>
        <span class=\"text-medium alt-font font-weight-600 margin-20px-bottom d-block text-extra-dark-gray\">";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_third_header", []), "value", [])), "html", null, true);
        echo "</span>
        <p>";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_third", []), "value", [])), "html", null, true);
        echo "</p>

      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section
<section class=\"wow fadeIn pt-0\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-10 d-flex flex-wrap mx-auto p-0\">
        <div class=\"col-12 col-lg-8 col-md-6 text-center text-md-left sm-margin-10px-bottom\">
          <div class=\"tag-cloud\">
            <a href=\"blog-grid.html\">Advertisement</a>
            <a href=\"blog-grid.html\">Artistry</a>
            <a href=\"blog-grid.html\">Blog</a>
            <a href=\"blog-grid.html\">Conceptual</a>
          </div>
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 text-center text-md-right\">
          <div class=\"social-icon-style-6\">
            <ul class=\"extra-small-icon\">
              <li><a class=\"likes-count\" href=\"#\" target=\"_blank\"><i class=\"fas fa-heart text-deep-pink\"></i><span class=\"text-small\">300</span></a></li>
              <li><a class=\"facebook\" href=\"http://facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a class=\"twitter\" href=\"http://twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a class=\"google\" href=\"http://google.com\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
              <li><a class=\"pinterest\" href=\"http://dribbble.com\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-12 col-lg-10 mx-auto margin-50px-top md-margin-30px-top wow fadeInUp\">
        <div class=\"d-block d-md-flex width-100 align-items-center align-items-md-start border border-color-extra-light-gray padding-50px-all md-padding-30px-all sm-padding-20px-all\">
          <div class=\"width-150px text-center sm-margin-15px-bottom\">
            <img src=\"http://placehold.it/149x149\" class=\"rounded-circle width-100px\" alt=\"\"/>
          </div>
          <div class=\"width-100 padding-40px-left last-paragraph-no-margin sm-no-padding-left text-center text-md-left\">
            <a href=\"#\" class=\"text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block text-small\">Alexander Harvard</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            <a href=\"#\" class=\"btn btn-very-small btn-black margin-20px-top\">All author posts</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
end section -->
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/perks/templates/nodes/node--blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 142,  175 => 141,  171 => 140,  166 => 138,  162 => 137,  158 => 136,  124 => 105,  120 => 104,  114 => 101,  110 => 100,  102 => 95,  96 => 92,  92 => 91,  73 => 79,  67 => 76,  58 => 70,  55 => 69,);
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
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
<!-- start page title section -->
<section class=\"wow fadeIn parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image:url('{{ file_url(node.field_blog_header_image.entity.uri.value) }}');\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-12 d-flex justify-content-center flex-column text-center one-second-screen page-title-large\">
        <!-- start page title -->
        <h1 class=\"text-white-2 alt-font font-weight-600 margin-10px-bottom\">{{ node.title.value }}</h1>
        <!-- end page title -->
        <!-- start sub title -->
        <span class=\"text-white-2 opacity6 alt-font text-uppercase text-small\">25 April 2017&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by <a href=\"{{ node.field_blog_header_image.value }}\" class=\"text-white-2\">{{ node.field_article_creator.value }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href=\"blog-masonry.html\" class=\"text-white-2\">{{ node.field_article_categorie.value }}</a></span>
        <!-- end sub title -->
      </div>
    </div>
  </div>
</section>
<!-- end page title section -->
<!-- start blog content section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 last-paragraph-no-margin text-center text-md-left\">
        <h5 class=\"font-weight-600 text-extra-dark-gray alt-font\">{{ node.field_article_subline.value }}</h5>
        <p>{{ node.field_article_description.value }}</p>
      </div>
      <div class=\"col-12\">
        <img src=\"{{ file_url(node.field_article_image_centered.entity.uri.value) }}\" alt=\"\" class=\"width-100 margin-50px-tb\">
      </div>
      <div class=\"col-12 text-center text-md-left\">
        <div class=\"row mx-0\">
          <div class=\"col-12 col-lg-6 pl-0 last-paragraph-no-margin md-margin-30px-bottom sm-no-padding-lr\">
            <span class=\"text-extra-dark-gray font-weight-600 alt-font margin-10px-bottom d-block text-medium\">{{ node.field_left_content_first_header.value }}</span>
            <p class=\"width-90 sm-width-100\">{{ node.field_left_content_first.value }} </p>
          </div>
          <div class=\"col-12 col-lg-6 pl-0 last-paragraph-no-margin sm-no-padding-lr\">
            <span class=\"text-extra-dark-gray font-weight-600 alt-font margin-10px-bottom d-block text-medium\">{{ node.field_right_content_first_header.value }}</span>
            <p class=\"width-90 sm-width-100\">{{ node.field_right_content_first.value }}  </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end blog content section -->
<!-- start parallax section
<section class=\"wow fadeIn parallax big-section\" data-stellar-background-ratio=\"0.4\" style=\"background-image: url('http://placehold.it/1920x1100')\">
  <div class=\"opacity-medium bg-extra-dark-gray\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-8 col-md-10 mx-auto\">
        <div class=\"bg-white padding-nine-all text-center\">
          <div class=\"alt-font text-medium-gray margin-15px-bottom text-uppercase text-small\">About restaurants Photography</div>
          <h5 class=\"font-weight-600 alt-font text-extra-dark-gray\">Taking an image, freezing a moment, reveals how rich reality truly</h5>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
          <a href=\"portfolio-full-width-image-gallery.html\" class=\"btn btn-small btn-dark-gray margin-10px-top sm-no-margin-top\">Explore Photography</a>
        </div>
      </div>
    </div>
  </div>
</section>
 end parallax section -->
<!-- start section -->
<section class=\"wow fadeIn\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center text-md-left\">

        <figure class=\"wp-caption alignright\"><img alt=\"\" src=\"{{ file_url(node.field_image_content_second.entity.uri.value) }}\"><figcaption class=\"wp-caption-text\">bildunterschrift</figcaption></figure>
        <span class=\"text-medium alt-font font-weight-600 margin-20px-bottom d-block text-extra-dark-gray\">{{ node.field_content_second_header.value }}</span>
        <p>{{ node.field_content_second.value }}</p>

        <figure class=\"wp-caption alignleft\"><img alt=\"\" src=\"{{ file_url(node.field_image_content_third.entity.uri.value) }}\"><figcaption class=\"wp-caption-text\">bildunterschrift</figcaption></figure>
        <span class=\"text-medium alt-font font-weight-600 margin-20px-bottom d-block text-extra-dark-gray\">{{ node.field_content_third_header.value }}</span>
        <p>{{ node.field_content_third.value }}</p>

      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section
<section class=\"wow fadeIn pt-0\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 col-lg-10 d-flex flex-wrap mx-auto p-0\">
        <div class=\"col-12 col-lg-8 col-md-6 text-center text-md-left sm-margin-10px-bottom\">
          <div class=\"tag-cloud\">
            <a href=\"blog-grid.html\">Advertisement</a>
            <a href=\"blog-grid.html\">Artistry</a>
            <a href=\"blog-grid.html\">Blog</a>
            <a href=\"blog-grid.html\">Conceptual</a>
          </div>
        </div>
        <div class=\"col-12 col-lg-4 col-md-6 text-center text-md-right\">
          <div class=\"social-icon-style-6\">
            <ul class=\"extra-small-icon\">
              <li><a class=\"likes-count\" href=\"#\" target=\"_blank\"><i class=\"fas fa-heart text-deep-pink\"></i><span class=\"text-small\">300</span></a></li>
              <li><a class=\"facebook\" href=\"http://facebook.com\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a class=\"twitter\" href=\"http://twitter.com\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
              <li><a class=\"google\" href=\"http://google.com\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
              <li><a class=\"pinterest\" href=\"http://dribbble.com\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-12 col-lg-10 mx-auto margin-50px-top md-margin-30px-top wow fadeInUp\">
        <div class=\"d-block d-md-flex width-100 align-items-center align-items-md-start border border-color-extra-light-gray padding-50px-all md-padding-30px-all sm-padding-20px-all\">
          <div class=\"width-150px text-center sm-margin-15px-bottom\">
            <img src=\"http://placehold.it/149x149\" class=\"rounded-circle width-100px\" alt=\"\"/>
          </div>
          <div class=\"width-100 padding-40px-left last-paragraph-no-margin sm-no-padding-left text-center text-md-left\">
            <a href=\"#\" class=\"text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-10px-bottom d-inline-block text-small\">Alexander Harvard</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            <a href=\"#\" class=\"btn btn-very-small btn-black margin-20px-top\">All author posts</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
end section -->
", "sites/all/themes/perks/templates/nodes/node--blog-post.html.twig", "/var/www/drupalvm/drupal/web/perks-employee-website/www/sites/all/themes/perks/templates/nodes/node--blog-post.html.twig");
    }
}
