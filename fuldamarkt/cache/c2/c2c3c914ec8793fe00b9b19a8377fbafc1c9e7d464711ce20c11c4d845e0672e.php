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

</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"#\">Market</a></li>
        <li><a href=\"#\">About</a></li>
      </div>
      <div class=\"search-icon\"><span class=\"fas fa-search\"></span></div>
      <div class=\"cancel-icon\"><span class=\"fas fa-times\"></span></div>
      <form action=\"#\">
        <input type=\"search\" class=\"search-data\" placeholder=\"Search\" required>
        <button type=\"submit\" class=\"fas fa-search\"></button>
      </form>
      <div class=\"profile\"></div>
    </nav>


    ";
        // line 29
        if (($context["message"] ?? null)) {
            // line 30
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 34
            echo "        <div id=\"reports\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

    <div id=\"body\" class=\"wrapper flex-grow-1\">";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    <div id=\"footer\">
            ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
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

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                &copy; Copyright 2020 by <a href=\"http://fuldamarkt.de/\">FuldaMarkt </a>.
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
        return array (  163 => 41,  159 => 40,  153 => 38,  146 => 5,  111 => 43,  109 => 40,  104 => 38,  100 => 36,  91 => 34,  87 => 33,  84 => 32,  78 => 30,  76 => 29,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    
<head>
    <title>{% block title %}{{ title }}{% endblock %}</title>
    <style>{{ source('home_style.css') }}</style>

</head>
<body class=\"d-flex flex-column min-vh-100\">
    <nav>
      <div class=\"menu-icon\"><span class=\"fas fa-bars\"></span></div>
      <div class=\"logo\">FuldaMarkt</div>
      <div class=\"nav-items\">
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Events</a></li>
        <li><a href=\"#\">Market</a></li>
        <li><a href=\"#\">About</a></li>
      </div>
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

    {% for error in errors %}
        <div id=\"reports\">{{ error }}</div>
    {% endfor %}


    <div id=\"body\" class=\"wrapper flex-grow-1\">{% block body %}{% endblock %}</div>
    <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2020 by <a href=\"http://fuldamarkt.de/\">FuldaMarkt </a>.
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
