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
            'headtags' => [$this, 'block_headtags'],
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
    public function block_headtags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#errors\").hide();
        });
    </script>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <h1>";
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "</h1>
    <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50\">
\t\t\t\t<form class=\"login100-form validate-form\" id=\"loginform\" method=\"post\" action=\"login.php\">

\t\t\t\t\t<span class=\"login100-form-title p-b-33\">
\t\t\t\t\t\tAccount Login
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" id=\"email\" type=\"text\" placeholder=\"Email address\" name=\"email\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn m-t-20\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-45 p-b-4\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"#\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tUsername / Password?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tDon't have an account yet?
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"signup.php\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tSign up
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
    <script type=\"text/javascript\">
        \$(document).ready ( function() {
            \$(\"#loginform\").validate ( {
                rules:{
                    email:{ required: true },
                    password:{ required: true }
                },
                messages: {
                    email: { required: \"Enter email.\" },
                    password: { required: \"Enter password.\" }
                }
            });
        });
    </script>

\t
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
        return array (  64 => 12,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block headtags %}
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#errors\").hide();
        });
    </script>
{% endblock %}

{% block body %}
    <h1>{{ body }}</h1>
    <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50\">
\t\t\t\t<form class=\"login100-form validate-form\" id=\"loginform\" method=\"post\" action=\"login.php\">

\t\t\t\t\t<span class=\"login100-form-title p-b-33\">
\t\t\t\t\t\tAccount Login
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
\t\t\t\t\t\t<input class=\"input100\" id=\"email\" type=\"text\" placeholder=\"Email address\" name=\"email\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn m-t-20\">
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-45 p-b-4\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"#\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tUsername / Password?
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tDon't have an account yet?
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"signup.php\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tSign up
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
    <script type=\"text/javascript\">
        \$(document).ready ( function() {
            \$(\"#loginform\").validate ( {
                rules:{
                    email:{ required: true },
                    password:{ required: true }
                },
                messages: {
                    email: { required: \"Enter email.\" },
                    password: { required: \"Enter password.\" }
                }
            });
        });
    </script>

\t
{% endblock %}

", "login.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/login.twig");
    }
}
