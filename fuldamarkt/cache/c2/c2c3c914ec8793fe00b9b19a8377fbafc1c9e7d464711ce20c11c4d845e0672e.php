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
class __TwigTemplate_0f2c07abda0ad55b0f76b805f529ce2927538f0dd2d03661ec8572012b70bd76 extends Template
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
            'headtags' => [$this, 'block_headtags'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"../template/static/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animate/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animsition/css/animsition.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/select2/select2.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/main.css\">
    <link href=\"../template/home_style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    
    ";
        // line 16
        $this->displayBlock('headtags', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"index.php\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"search_product.php\">Market</a></li>
        <li><a href=\"#\">About</a></li>
          ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 27)) {
            // line 28
            echo "              <li><a href=\"logout.php\">Logout</a></li>
          ";
        } else {
            // line 30
            echo "              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"signup.php\">Signup</a></li>
          ";
        }
        // line 33
        echo "

      </div>
        ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 36)) {
            // line 37
            echo "            <a href=\"userhome.php\" id=\"userhomelink\">";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 37), "full_name", [], "any", false, false, false, 37)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 37), "full_name", [], "any", false, false, false, 37), "html", null, true);
                echo "'s";
            } else {
                echo "User";
            }
            echo " Home</a>
        ";
        }
        // line 39
        echo "      
      <div class=\"profile\"></div>
    </nav>


    ";
        // line 44
        if (($context["message"] ?? null)) {
            // line 45
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 47
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 48
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 49
                echo "        <div id=\"errors\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    <div id=\"body\" class=\"wrapper flex-grow-1\">";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
        ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "    </div>

  
  <script src=\"../vendor/animsition/js/animsition.min.js\"></script>
\t<script src=\"../vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"../vendor/select2/select2.min.js\"></script>
  <script src=\"../js/main.js\"></script>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
    }

    // line 16
    public function block_headtags($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "            &copy; Copyright 2020 by <a href=\"#\">FuldaMarkt </a>.
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
        return array (  186 => 56,  182 => 55,  176 => 53,  170 => 16,  163 => 5,  149 => 58,  147 => 55,  142 => 53,  139 => 52,  136 => 51,  127 => 49,  122 => 48,  119 => 47,  113 => 45,  111 => 44,  104 => 39,  93 => 37,  91 => 36,  86 => 33,  81 => 30,  77 => 28,  75 => 27,  63 => 17,  61 => 16,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
<head>
    <title>{% block title %}{{ title }}{% endblock %}</title>

    <link href=\"../template/static/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animate/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/animsition/css/animsition.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../vendor/select2/select2.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/main.css\">
    <link href=\"../template/home_style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    
    {% block headtags %}{% endblock %}
</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"index.php\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"search_product.php\">Market</a></li>
        <li><a href=\"#\">About</a></li>
          {% if session.get('is_authenticated') %}
              <li><a href=\"logout.php\">Logout</a></li>
          {% else %}
              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"signup.php\">Signup</a></li>
          {% endif %}


      </div>
        {% if session.get('is_authenticated') %}
            <a href=\"userhome.php\" id=\"userhomelink\">{% if session.get('user_info').full_name %}{{ session.get('user_info').full_name }}'s{% else %}User{% endif %} Home</a>
        {% endif %}
      
      <div class=\"profile\"></div>
    </nav>


    {% if message %}
        <div id=\"reports\">{{ message }}</div>
    {% endif %}
    {% if errors %}
    {% for error in errors %}
        <div id=\"errors\">{{ error }}</div>
    {% endfor %}
    {% endif %}

    <div id=\"body\" class=\"wrapper flex-grow-1\">{% block body %}{% endblock %}</div>
    <div id=\"footer\">
        {% block footer %}
            &copy; Copyright 2020 by <a href=\"#\">FuldaMarkt </a>.
        {% endblock %}
    </div>

  
  <script src=\"../vendor/animsition/js/animsition.min.js\"></script>
\t<script src=\"../vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"../vendor/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"../vendor/select2/select2.min.js\"></script>
  <script src=\"../js/main.js\"></script>
  </body>
</html>
", "base.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/base.twig");
    }
}
