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

/* login.twig */
class __TwigTemplate_1c349a761440c667fccd23fe52ab7aeda88c6bbe97b1521f09d09558a8294af9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <p>";
        // line 14
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "</p>

    <form method=\"post\" action=\"loginpost.php\">
        <fieldset>
            <legend>Enter email and password to login.</legend>
            <div>
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"text\" placeholder=\"Email address\" name=\"email\">
            </div>
            <div>
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
            </div>
            <div>
                <button type=\"submit\" name=\"submit\">Login</button>
            </div>
        </fieldset>
    </form>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  74 => 13,  70 => 12,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block title %}
    {{ title }}
{% endblock %}

{% block page_title %}
    {{ title }}
{% endblock %}


{% block body %}

    <p>{{ body }}</p>

    <form method=\"post\" action=\"loginpost.php\">
        <fieldset>
            <legend>Enter email and password to login.</legend>
            <div>
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"text\" placeholder=\"Email address\" name=\"email\">
            </div>
            <div>
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
            </div>
            <div>
                <button type=\"submit\" name=\"submit\">Login</button>
            </div>
        </fieldset>
    </form>

{% endblock %}

", "login.twig", "/var/www/html/fuldamarkt/template/login.twig");
    }
}
