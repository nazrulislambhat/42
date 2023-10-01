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

/* themes/fortytwo/components/templates/navigation/menu--main.html.twig */
class __TwigTemplate_bc346ff7545f89cd12c10007b14b617d extends \Twig\Template
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
        // line 21
        echo "
";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("fortytwo/navigation"), "html", null, true);
        echo "


";
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 26, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 28
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            echo "\t";
            $macros["menus"] = $this;
            // line 30
            echo "\t";
            if (($context["items"] ?? null)) {
                // line 31
                echo "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 32
                    echo "\t\t\t<ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu-links"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">
\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t<ul>
\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "\t\t\t\t\t<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 37), "addClass", [0 => "menu-links__link"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
                    echo ">
\t\t\t\t\t\t";
                    // line 38
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), 38, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 38), 38, $this->source)), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39)) {
                        // line 40
                        echo "\t\t\t\t\t\t\t";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 40, $context, $this->getSourceContext()));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t</ul>
\t\t";
            }
            // line 46
            echo "\t";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/fortytwo/components/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  120 => 44,  113 => 42,  107 => 40,  105 => 39,  101 => 38,  96 => 37,  91 => 36,  87 => 34,  81 => 32,  78 => 31,  75 => 30,  72 => 29,  57 => 28,  50 => 26,  48 => 25,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
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
 */
#}

{{ attach_library('fortytwo/navigation') }}


{% import _self as menus %}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{% if menu_level == 0 %}
\t\t\t<ul{{attributes.addClass('menu-links')}}>
\t\t\t{% else %}
\t\t\t\t<ul>
\t\t\t\t{% endif %}
\t\t\t\t{% for item in items %}
\t\t\t\t\t<li{{item.attributes.addClass('menu-links__link')}}>
\t\t\t\t\t\t{{ link(item.title, item.url) }}
\t\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t{% endmacro %}
", "themes/fortytwo/components/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/fortytwo/components/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "macro" => 28, "if" => 30, "for" => 36);
        static $filters = array("escape" => 22);
        static $functions = array("attach_library" => 22, "link" => 38);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['attach_library', 'link']
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
