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
    <style>";
        // line 6
        echo twig_source($this->env, "home_style.css");
        echo "</style>
    <link href=\"../template/static/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/animate/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/animsition/css/animsition.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/select2/select2.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/css/util.css\">
\t  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/css/main.css\">
    
    ";
        // line 15
        $this->displayBlock('headtags', $context, $blocks);
        // line 16
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
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 26)) {
            // line 27
            echo "              <li><a href=\"logout.php\">Logout</a></li>
          ";
        } else {
            // line 29
            echo "              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"signup.php\">Signup</a></li>
          ";
        }
        // line 32
        echo "

      </div>
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 35)) {
            // line 36
            echo "            <a href=\"userhome.php\" id=\"userhomelink\">";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 36), "full_name", [], "any", false, false, false, 36)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 36), "full_name", [], "any", false, false, false, 36), "html", null, true);
                echo "'s";
            } else {
                echo "User";
            }
            echo " Home</a>
        ";
        }
        // line 38
        echo "      
      <div class=\"profile\"></div>
    </nav>


    ";
        // line 43
        if (($context["message"] ?? null)) {
            // line 44
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 46
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 47
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 48
                echo "        <div id=\"errors\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    <div id=\"body\" class=\"wrapper flex-grow-1\">";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "    </div>

  
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/animsition/js/animsition.min.js\"></script>
\t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/select2/select2.min.js\"></script>
  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/js/main.js\"></script>
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

    // line 15
    public function block_headtags($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
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
        return array (  221 => 55,  217 => 54,  211 => 52,  205 => 15,  198 => 5,  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  169 => 57,  167 => 54,  162 => 52,  159 => 51,  156 => 50,  147 => 48,  142 => 47,  139 => 46,  133 => 44,  131 => 43,  124 => 38,  113 => 36,  111 => 35,  106 => 32,  101 => 29,  97 => 27,  95 => 26,  83 => 16,  81 => 15,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
<head>
    <title>{% block title %}{{ title }}{% endblock %}</title>
    <style>{{ source('home_style.css') }}</style>
    <link href=\"../template/static/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/vendor/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/vendor/animate/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/vendor/animsition/css/animsition.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/vendor/select2/select2.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/css/util.css\">
\t  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path_url }}/css/main.css\">
    
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

  
  <script src=\"{{ path_url }}/vendor/animsition/js/animsition.min.js\"></script>
\t<script src=\"{{ path_url }}/vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"{{ path_url }}/vendor/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"{{ path_url }}/vendor/select2/select2.min.js\"></script>
  <script src=\"{{ path_url }}/js/main.js\"></script>
  </body>
</html>
", "base.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/base.twig");
    }
}
