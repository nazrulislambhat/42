<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/fortytwo/components/templates/views/views-view--publications.html.twig */
class __TwigTemplate_e9024d9fb282482bb970b6b3028bf707 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("fortytwo/publications"), "html", null, true);
        echo "


<div";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "publications-content"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">


\t";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 39, $this->source), "html", null, true);
        echo "
\t";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
        echo "
\t";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "

\t";
        // line 43
        if (($context["header"] ?? null)) {
            // line 44
            echo "\t\t<header>
\t\t\t";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 45, $this->source), "html", null, true);
            echo "
\t\t</header>
\t";
        }
        // line 48
        echo "
\t";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 49, $this->source), "html", null, true);
        echo "
\t";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 50, $this->source), "html", null, true);
        echo "

\t";
        // line 52
        if (($context["rows"] ?? null)) {
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 53, $this->source), "html", null, true);
            echo "
\t";
        } elseif (        // line 54
($context["empty"] ?? null)) {
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 55, $this->source), "html", null, true);
            echo "
\t";
        }
        // line 57
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 57, $this->source), "html", null, true);
        echo "

\t";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 59, $this->source), "html", null, true);
        echo "
\t";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 60, $this->source), "html", null, true);
        echo "

\t";
        // line 62
        if (($context["footer"] ?? null)) {
            // line 63
            echo "\t\t<footer>
\t\t\t";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 64, $this->source), "html", null, true);
            echo "
\t\t</footer>
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 68, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/fortytwo/components/templates/views/views-view--publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 68,  126 => 67,  120 => 64,  117 => 63,  115 => 62,  110 => 60,  106 => 59,  100 => 57,  95 => 55,  93 => 54,  89 => 53,  87 => 52,  82 => 50,  78 => 49,  75 => 48,  69 => 45,  66 => 44,  64 => 43,  59 => 41,  55 => 40,  51 => 39,  45 => 36,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A CSS-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   JavaScript.
 *
 * @see template_preprocess_views_view()
 */
#}
{{ attach_library('fortytwo/publications') }}


<div{{attributes.addClass('publications-content')}}>


\t{{ title_prefix }}
\t{{ title }}
\t{{ title_suffix }}

\t{% if header %}
\t\t<header>
\t\t\t{{ header }}
\t\t</header>
\t{% endif %}

\t{{ exposed }}
\t{{ attachment_before }}

\t{% if rows -%}
\t\t{{ rows }}
\t{% elseif empty -%}
\t\t{{ empty }}
\t{% endif %}
\t{{ pager }}

\t{{ attachment_after }}
\t{{ more }}

\t{% if footer %}
\t\t<footer>
\t\t\t{{ footer }}
\t\t</footer>
\t{% endif %}

\t{{ feed_icons }}
</div>
", "themes/fortytwo/components/templates/views/views-view--publications.html.twig", "/var/www/html/web/themes/fortytwo/components/templates/views/views-view--publications.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 43);
        static $filters = array("escape" => 33);
        static $functions = array("attach_library" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
