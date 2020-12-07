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
    <form id=\"signupform\" method=\"post\" action=\"signup.php\">
        <fieldset>
            <legend>";
        // line 22
        echo twig_escape_filter($this->env, (((isset($context["legend"]) || array_key_exists("legend", $context))) ? (_twig_default_filter(($context["legend"] ?? null), "Enter information to signup.")) : ("Enter information to signup.")), "html", null, true);
        echo "</legend>
            <div>
                <label for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\" />
            </div>

            <div>
                <label for=\"uname\">Username</label>
                <input id=\"uname\" type=\"text\" placeholder=\"Username\" name=\"uname\" />
            </div>

            <div>
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\" />
            </div>

            <div>
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" />
            </div>

            <div>
                <label for=\"rpass\">Re-type Password</label>
                <input id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\" />
            </div>

            <div>
                <label for=\"gender\">Gender</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"M\">Male</option>
                    <option value=\"F\">Female</option>
                </select>
            </div>

            <div>
                <label for=\"utype\">User Type</label>
                <select id=\"utype\" name=\"utype\">
                    <option value=\"STUDENT\">Student</option>
                    <option value=\"FACULTY\">Faculty</option>
                    <option value=\"STAFF\">Staff</option>
                </select>
            </div>

            <div>
                <label for=\"agree\" id=\"agree-label\" style=\"display: block;  clear: both;\">
                    <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I am a member of Hochschule Fulda
                </label>

                <input type=\"submit\" name=\"submit\" value=\"Signup\" style=\"display: block; clear: both; margin-top: 5px; \" />
            </div>
        </fieldset>
    </form>

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
        return array (  86 => 22,  79 => 19,  75 => 18,  60 => 6,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
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
    <form id=\"signupform\" method=\"post\" action=\"signup.php\">
        <fieldset>
            <legend>{{ legend|default('Enter information to signup.') }}</legend>
            <div>
                <label for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\" />
            </div>

            <div>
                <label for=\"uname\">Username</label>
                <input id=\"uname\" type=\"text\" placeholder=\"Username\" name=\"uname\" />
            </div>

            <div>
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\" />
            </div>

            <div>
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" />
            </div>

            <div>
                <label for=\"rpass\">Re-type Password</label>
                <input id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\" />
            </div>

            <div>
                <label for=\"gender\">Gender</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"M\">Male</option>
                    <option value=\"F\">Female</option>
                </select>
            </div>

            <div>
                <label for=\"utype\">User Type</label>
                <select id=\"utype\" name=\"utype\">
                    <option value=\"STUDENT\">Student</option>
                    <option value=\"FACULTY\">Faculty</option>
                    <option value=\"STAFF\">Staff</option>
                </select>
            </div>

            <div>
                <label for=\"agree\" id=\"agree-label\" style=\"display: block;  clear: both;\">
                    <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I am a member of Hochschule Fulda
                </label>

                <input type=\"submit\" name=\"submit\" value=\"Signup\" style=\"display: block; clear: both; margin-top: 5px; \" />
            </div>
        </fieldset>
    </form>

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
