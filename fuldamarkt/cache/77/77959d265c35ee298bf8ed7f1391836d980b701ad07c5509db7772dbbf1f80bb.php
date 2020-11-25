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

/* base.twig */
class __TwigTemplate_6f66806075d6832b68609d9df86b8f515d10dd8bc965603a537763cebb34ba34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

<ul id=\"navigation\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 10), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>

<h1>";
        // line 14
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>


";
        // line 17
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 14
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "Index
";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 19,  105 => 18,  98 => 14,  91 => 4,  84 => 21,  82 => 18,  78 => 17,  72 => 14,  68 => 12,  57 => 10,  53 => 9,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}{{ title }}{% endblock %}</title>
</head>
<body>

<ul id=\"navigation\">
    {% for item in navigation %}
        <li><a href=\"{{ item.href }}\">{{ item.caption }}</a></li>
    {% endfor %}
</ul>

<h1>{% block page_title %}{{ title }}{% endblock %}</h1>


{{ body }}
{% block body %}
Index
{% endblock %}

</body>
</html>
", "base.twig", "/var/www/html/fuldamarkt/template/base.twig");
    }
}
