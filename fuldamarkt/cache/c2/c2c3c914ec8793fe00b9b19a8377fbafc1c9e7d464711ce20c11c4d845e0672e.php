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
    ";
        // line 8
        $this->displayBlock('headtags', $context, $blocks);
        // line 9
        echo "</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"index.php\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"#\">Market</a></li>
        <li><a href=\"#\">About</a></li>
          ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 19)) {
            // line 20
            echo "              <li><a href=\"logout.php\">Logout</a></li>
          ";
        } else {
            // line 22
            echo "              <li><a href=\"login.php\">Login</a></li>
              <li><a href=\"signup.php\">Signup</a></li>
          ";
        }
        // line 25
        echo "

      </div>
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "is_authenticated"], "method", false, false, false, 28)) {
            // line 29
            echo "            <a href=\"userhome.php\" id=\"userhomelink\">";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 29), "full_name", [], "any", false, false, false, 29)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "user_info"], "method", false, false, false, 29), "full_name", [], "any", false, false, false, 29), "html", null, true);
                echo "'s";
            } else {
                echo "User";
            }
            echo " Home</a>
        ";
        }
        // line 31
        echo "      <div class=\"search-icon\"><span class=\"fas fa-search\"></span></div>
      <div class=\"cancel-icon\"><span class=\"fas fa-times\"></span></div>
      <form action=\"#\">
        <input type=\"search\" class=\"search-data\" placeholder=\"Search\" required>
        <button type=\"submit\" class=\"fas fa-search\"></button>
      </form>
      <div class=\"profile\"></div>
    </nav>


    ";
        // line 41
        if (($context["message"] ?? null)) {
            // line 42
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 44
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 45
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                echo "        <div id=\"errors\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    <div id=\"body\" class=\"wrapper flex-grow-1\">";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "    </div>

    <script>
    const menuBtn = document.querySelector(\".menu-icon span\");
    const searchBtn = document.querySelector(\".search-icon\");
    const cancelBtn = document.querySelector(\".cancel-icon\");
    const items = document.querySelector(\".nav-items\");
    const form = document.querySelector(\"form\");
    menuBtn.onclick = ()=>{
      items.classList.add(\"active\");
      menuBtn.classList.add(\"hide\");
      searchBtn.classList.add(\"hide\");
      cancelBtn.classList.add(\"show\");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove(\"active\");
      menuBtn.classList.remove(\"hide\");
      searchBtn.classList.remove(\"hide\");
      cancelBtn.classList.remove(\"show\");
      form.classList.remove(\"active\");
      cancelBtn.style.color = \"#ff3d00\";
    }
    searchBtn.onclick = ()=>{
      form.classList.add(\"active\");
      searchBtn.classList.add(\"hide\");
      cancelBtn.classList.add(\"show\");
    }
  </script>

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

    // line 8
    public function block_headtags($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 52
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
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
        return array (  207 => 53,  203 => 52,  197 => 50,  191 => 8,  184 => 5,  149 => 55,  147 => 52,  142 => 50,  139 => 49,  136 => 48,  127 => 46,  122 => 45,  119 => 44,  113 => 42,  111 => 41,  99 => 31,  88 => 29,  86 => 28,  81 => 25,  76 => 22,  72 => 20,  70 => 19,  58 => 9,  56 => 8,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
<head>
    <title>{% block title %}{{ title }}{% endblock %}</title>
    <style>{{ source('home_style.css') }}</style>
    <link href=\"../template/static/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    {% block headtags %}{% endblock %}
</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"index.php\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"#\">Market</a></li>
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
      <div class=\"search-icon\"><span class=\"fas fa-search\"></span></div>
      <div class=\"cancel-icon\"><span class=\"fas fa-times\"></span></div>
      <form action=\"#\">
        <input type=\"search\" class=\"search-data\" placeholder=\"Search\" required>
        <button type=\"submit\" class=\"fas fa-search\"></button>
      </form>
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

    <script>
    const menuBtn = document.querySelector(\".menu-icon span\");
    const searchBtn = document.querySelector(\".search-icon\");
    const cancelBtn = document.querySelector(\".cancel-icon\");
    const items = document.querySelector(\".nav-items\");
    const form = document.querySelector(\"form\");
    menuBtn.onclick = ()=>{
      items.classList.add(\"active\");
      menuBtn.classList.add(\"hide\");
      searchBtn.classList.add(\"hide\");
      cancelBtn.classList.add(\"show\");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove(\"active\");
      menuBtn.classList.remove(\"hide\");
      searchBtn.classList.remove(\"hide\");
      cancelBtn.classList.remove(\"show\");
      form.classList.remove(\"active\");
      cancelBtn.style.color = \"#ff3d00\";
    }
    searchBtn.onclick = ()=>{
      form.classList.add(\"active\");
      searchBtn.classList.add(\"hide\");
      cancelBtn.classList.add(\"show\");
    }
  </script>

  </body>
</html>
", "base.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/base.twig");
    }
}
