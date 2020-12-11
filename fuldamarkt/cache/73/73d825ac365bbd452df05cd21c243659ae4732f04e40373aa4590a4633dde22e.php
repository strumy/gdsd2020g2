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

/* signup.twig */
class __TwigTemplate_f81b61612396652c10fe28e7c2ed1bd622c781384d802ab5e9a690541c845493 extends Template
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
        $this->parent = $this->loadTemplate("base.twig", "signup.twig", 1);
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
        echo "    <p>";
        echo twig_escape_filter($this->env, ($context["body"] ?? null), "html", null, true);
        echo "</p>
    <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50\">
\t\t\t\t<form class=\"login100-form validate-form\" id=\"signupform\" method=\"post\" action=\"signup.php\">
\t\t\t\t\t<span class=\"login100-form-title p-b-33\">
\t\t\t\t\t\tAccount Signup
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\">
\t\t\t\t\t\t<input class=\"input100\"  id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
                    <div class=\"wrap-input100 validate-input\">
\t\t\t\t\t\t<input class=\"input100\"  id=\"uname\" type=\"text\" placeholder=\"Username\" name=\"uname\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: your_name@informatik.hs-fulda.de\">
\t\t\t\t\t\t<input class=\"input100\" id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" >
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Confirm Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
                    
                    <div class=\"dropdown show\" >
\t\t\t            <label for=\"gender\">Gender</label>
\t\t\t            <select class=\"browser-default custom-select\" id=\"gender\" name=\"gender\">
\t\t\t\t            <option value=\"M\">Male</option>
\t\t\t\t            <option value=\"F\">Female</option>
\t\t\t            </select>
\t\t            </div>

                    <div>
\t\t\t            <label for=\"utype\">User Type</label>
\t\t\t            <select class=\"browser-default custom-select\" id=\"utype\" name=\"utype\">
\t\t\t\t            <option value=\"STUDENT\">Student</option>
\t\t\t\t            <option value=\"FACULTY\">Faculty</option>
\t\t\t\t            <option value=\"STAFF\">Staff</option>
        \t\t\t    </select>
\t\t            </div>

\t\t\t\t\t<div class=\"container-login100-form-btn m-t-20\">
                        <label for=\"agree\" id=\"agree-label\" style=\"display: block;  clear: both;\">
\t\t\t\t            <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I am a member of Hochschule Fulda
\t\t\t            </label>
                        
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\tSignup
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tAlready a user?
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"login.php\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
    

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#signupform\").validate({
                ignore: \".ignore\",
                groups: {
                    agree: \"agree\"
                },
                errorPlacement: function(error, element) {
                    if (element.attr(\"name\") === \"agree\") {
                        error.insertAfter(\"#agree-label\");
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules:{
                    name:{ required: true , maxlength: 100 },
                    uname:{ required: true , maxlength: 100 },
                    email:{ required: true, email: true , maxlength: 50},
                    password:{ required: true, maxlength: 20},
                    rpass:{ required: true, maxlength: 20, equalTo: \"#password\" },
                    gender:{ required: true },
                    utype: { required: true }
                },
                messages:{
                    name: {
                        required: \"Enter full name.\",
                        maxlength: \"Name can't be longer than 100 characters.\"
                    },
                    uname: {
                        required: \"Enter username.\",
                        maxlength: \"Username can't be longer than 50 characters.\"
                    },
                    email: {
                        required: \"Enter valid email.\",
                        email: \"Please enter a valid email.\",
                        maxlength: \"Email can't be longer than 50 characters.\"
                    },
                    password: {
                        required: \"Password minimum 5 characters.\",
                        maxlength: \"Password can't be longer than 20 characters.\"
                    },
                    rpass: {
                        required: \"Enter password again.\",
                        equalTo: \"Password don't match.\"
                    },
                    gender: \"Please select gender.\",
                    utype: \"Please select user type.\"
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "signup.twig";
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
    <p>{{ body }}</p>
    <div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50\">
\t\t\t\t<form class=\"login100-form validate-form\" id=\"signupform\" method=\"post\" action=\"signup.php\">
\t\t\t\t\t<span class=\"login100-form-title p-b-33\">
\t\t\t\t\t\tAccount Signup
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\">
\t\t\t\t\t\t<input class=\"input100\"  id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
                    <div class=\"wrap-input100 validate-input\">
\t\t\t\t\t\t<input class=\"input100\"  id=\"uname\" type=\"text\" placeholder=\"Username\" name=\"uname\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: your_name@informatik.hs-fulda.de\">
\t\t\t\t\t\t<input class=\"input100\" id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" >
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wrap-input100 rs1 validate-input\" data-validate=\"Confirm Password is required\">
\t\t\t\t\t\t<input class=\"input100\" id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\">
\t\t\t\t\t\t<span class=\"focus-input100-1\"></span>
\t\t\t\t\t\t<span class=\"focus-input100-2\"></span>
\t\t\t\t\t</div>
                    
                    <div class=\"dropdown show\" >
\t\t\t            <label for=\"gender\">Gender</label>
\t\t\t            <select class=\"browser-default custom-select\" id=\"gender\" name=\"gender\">
\t\t\t\t            <option value=\"M\">Male</option>
\t\t\t\t            <option value=\"F\">Female</option>
\t\t\t            </select>
\t\t            </div>

                    <div>
\t\t\t            <label for=\"utype\">User Type</label>
\t\t\t            <select class=\"browser-default custom-select\" id=\"utype\" name=\"utype\">
\t\t\t\t            <option value=\"STUDENT\">Student</option>
\t\t\t\t            <option value=\"FACULTY\">Faculty</option>
\t\t\t\t            <option value=\"STAFF\">Staff</option>
        \t\t\t    </select>
\t\t            </div>

\t\t\t\t\t<div class=\"container-login100-form-btn m-t-20\">
                        <label for=\"agree\" id=\"agree-label\" style=\"display: block;  clear: both;\">
\t\t\t\t            <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I am a member of Hochschule Fulda
\t\t\t            </label>
                        
\t\t\t\t\t\t<button class=\"login100-form-btn\" type=\"submit\" name=\"submit\">
\t\t\t\t\t\t\tSignup
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tAlready a user?
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a href=\"login.php\" class=\"txt2 hov1\">
\t\t\t\t\t\t\tSign in
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
    

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#signupform\").validate({
                ignore: \".ignore\",
                groups: {
                    agree: \"agree\"
                },
                errorPlacement: function(error, element) {
                    if (element.attr(\"name\") === \"agree\") {
                        error.insertAfter(\"#agree-label\");
                    } else {
                        error.insertAfter(element);
                    }
                },
                rules:{
                    name:{ required: true , maxlength: 100 },
                    uname:{ required: true , maxlength: 100 },
                    email:{ required: true, email: true , maxlength: 50},
                    password:{ required: true, maxlength: 20},
                    rpass:{ required: true, maxlength: 20, equalTo: \"#password\" },
                    gender:{ required: true },
                    utype: { required: true }
                },
                messages:{
                    name: {
                        required: \"Enter full name.\",
                        maxlength: \"Name can't be longer than 100 characters.\"
                    },
                    uname: {
                        required: \"Enter username.\",
                        maxlength: \"Username can't be longer than 50 characters.\"
                    },
                    email: {
                        required: \"Enter valid email.\",
                        email: \"Please enter a valid email.\",
                        maxlength: \"Email can't be longer than 50 characters.\"
                    },
                    password: {
                        required: \"Password minimum 5 characters.\",
                        maxlength: \"Password can't be longer than 20 characters.\"
                    },
                    rpass: {
                        required: \"Enter password again.\",
                        equalTo: \"Password don't match.\"
                    },
                    gender: \"Please select gender.\",
                    utype: \"Please select user type.\"
                }
            });
        });
    </script>

{% endblock %}
", "signup.twig", "/var/www/html/gdsd2020g2/fuldamarkt/template/signup.twig");
    }
}
