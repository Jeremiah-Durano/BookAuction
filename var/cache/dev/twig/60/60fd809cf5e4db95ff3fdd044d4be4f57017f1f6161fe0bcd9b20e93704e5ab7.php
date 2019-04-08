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

/* no-sidebar.html.twig */
class __TwigTemplate_d0dcd421254a798d87c84a3eff6671ea58b32c95b7db0244e3870860a5b7dfb3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "no-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "no-sidebar.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tTelephasic by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t</head>
\t<body class=\"no-sidebar is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"index.html.twig\">Telephasic</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"left-sidebar.html.twig\">Left Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"break\"><a href=\"right-sidebar.html.twig\">Right Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"no-sidebar.html.twig\">No Sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Main -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t\t";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t\t<div id=\"footer\" class=\"container\">

\t\t\t\t\t<div id=\"copyright\" class=\"container\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; Jeremiah Durano TUD Blanchardstown 2019</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t</div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/jquery.dropotron.min.js\"></script>
\t\t\t<script src=\"assets/js/browser.min.js\"></script>
\t\t\t<script src=\"assets/js/breakpoints.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<script src=\"assets/js/main.js\"></script>

\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "no-sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  123 => 9,  88 => 40,  86 => 39,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tTelephasic by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>{% block title %}{% endblock %}</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t</head>
\t<body class=\"no-sidebar is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"index.html.twig\">Telephasic</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"left-sidebar.html.twig\">Left Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"break\"><a href=\"right-sidebar.html.twig\">Right Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"no-sidebar.html.twig\">No Sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Main -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t\t<div id=\"footer\" class=\"container\">

\t\t\t\t\t<div id=\"copyright\" class=\"container\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; Jeremiah Durano TUD Blanchardstown 2019</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t</div>

\t\t<!-- Scripts -->
\t\t\t<script src=\"assets/js/jquery.min.js\"></script>
\t\t\t<script src=\"assets/js/jquery.dropotron.min.js\"></script>
\t\t\t<script src=\"assets/js/browser.min.js\"></script>
\t\t\t<script src=\"assets/js/breakpoints.min.js\"></script>
\t\t\t<script src=\"assets/js/util.js\"></script>
\t\t\t<script src=\"assets/js/main.js\"></script>

\t</body>
</html>", "no-sidebar.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/no-sidebar.html.twig");
    }
}
