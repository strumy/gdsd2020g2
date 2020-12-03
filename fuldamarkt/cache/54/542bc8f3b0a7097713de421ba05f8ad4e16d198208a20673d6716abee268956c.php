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
class __TwigTemplate_09efa98b53a3b8ee208e5c9179934065f7ee2aa9a78ab83e8ec2d32d8b52b2e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "</p>
    <form method=\"post\" action=\"login.php\">
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block body %}
    <p>{{ body }}</p>
    <form method=\"post\" action=\"login.php\">
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

", "login.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/login.twig");
    }
}
