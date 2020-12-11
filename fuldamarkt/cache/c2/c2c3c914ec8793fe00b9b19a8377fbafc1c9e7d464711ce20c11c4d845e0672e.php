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

    <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" type=\"text/javascript\"></script>
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js\" integrity=\"sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==\" crossorigin=\"anonymous\" type=\"text/javascript\"></script>
    ";
        // line 20
        $this->displayBlock('headtags', $context, $blocks);
        // line 21
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
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 31)) {
            // line 32
            echo "              <li><a href=\"logout.php\">Logout</a></li>
          ";
        } else {
            // line 34
            echo "              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"signup.php\">Signup</a></li>
          ";
        }
        // line 37
        echo "

      </div>
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 40)) {
            // line 41
            echo "            <a href=\"userhome.php\" id=\"userhomelink\">";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 41), "full_name", [], "any", false, false, false, 41)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 41), "full_name", [], "any", false, false, false, 41), "html", null, true);
                echo "'s";
            } else {
                echo "User";
            }
            echo " Home</a>
        ";
        }
        // line 43
        echo "      
      <div class=\"profile\"></div>
    </nav>


    ";
        // line 48
        if (($context["message"] ?? null)) {
            // line 49
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 51
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 52
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 53
                echo "        <div id=\"errors\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    <div id=\"body\" class=\"wrapper flex-grow-1\">";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
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

    // line 20
    public function block_headtags($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
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
        return array (  190 => 60,  186 => 59,  180 => 57,  174 => 20,  167 => 5,  153 => 62,  151 => 59,  146 => 57,  143 => 56,  140 => 55,  131 => 53,  126 => 52,  123 => 51,  117 => 49,  115 => 48,  108 => 43,  97 => 41,  95 => 40,  90 => 37,  85 => 34,  81 => 32,  79 => 31,  67 => 21,  65 => 20,  47 => 5,  41 => 1,);
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

    <script src=\"https://code.jquery.com/jquery-1.12.4.min.js\" type=\"text/javascript\"></script>
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js\" integrity=\"sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==\" crossorigin=\"anonymous\" type=\"text/javascript\"></script>
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
