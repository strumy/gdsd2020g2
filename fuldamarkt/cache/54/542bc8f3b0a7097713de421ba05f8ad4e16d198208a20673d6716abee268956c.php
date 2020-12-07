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
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jquery/jquery.min.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jqueryui/themes/smoothness/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jqueryui/jquery-ui.min.js\" type=\"text/javascript\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js\" integrity=\"sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==\" crossorigin=\"anonymous\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$(\"#errors\").hide();
        });
    </script>
";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <h1>";
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "</h1>
    <form id=\"loginform\" method=\"post\" action=\"login.php\">
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
        return array (  79 => 19,  75 => 18,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block headtags %}
    <script src=\"{{ path_url }}/vendor/components/jquery/jquery.min.js\" type=\"text/javascript\"></script>
    <link href=\"{{ path_url }}/vendor/components/jqueryui/themes/smoothness/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script src=\"{{ path_url }}/vendor/components/jqueryui/jquery-ui.min.js\" type=\"text/javascript\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js\" integrity=\"sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==\" crossorigin=\"anonymous\" type=\"text/javascript\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$(\"#errors\").hide();
        });
    </script>
{% endblock %}

{% block body %}
    <h1>{{ body }}</h1>
    <form id=\"loginform\" method=\"post\" action=\"login.php\">
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
{% endblock %}

", "login.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/login.twig");
    }
}
