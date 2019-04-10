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
class __TwigTemplate_90b83e98fca33be65655d1ed62d757d899b6db619a905ecacacd345dc1b99a8f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'pageHeader' => [$this, 'block_pageHeader'],
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
<html>
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 5
        $this->displayBlock('javascripts', $context, $blocks);
        // line 6
        echo "\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t\t<style>
\t\t\t@import '/css/main.css';
\t\t\t@import 'https://getbootstrap.com/docs/4.1/getting-started/introduction/#css';
\t\t</style>

\t</head>
\t<body class=\"no-sidebar is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"#\">";
        // line 24
        $this->displayBlock('pageHeader', $context, $blocks);
        echo "</a></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!--NAV\t-->
\t\t\t<nav id=\"nav\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"break\"><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
        echo "\">Logout</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- Main -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t\t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
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
\t\t\t<script src=\"js/jquery.min.js\"></script>
\t\t\t<script src=\"js/jquery.dropotron.min.js\"></script>
\t\t\t<script src=\"js/browser.min.js\"></script>
\t\t\t<script src=\"js/breakpoints.min.js\"></script>
\t\t\t<script src=\"js/util.js\"></script>
\t\t\t<script src=\"js/main.js\"></script>

\t</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_pageHeader($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 36,  165 => 24,  148 => 5,  131 => 4,  96 => 37,  94 => 36,  85 => 30,  76 => 24,  56 => 6,  54 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>{% block title %}{% endblock %}</title>
\t\t{% block javascripts %}{% endblock %}
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t\t<style>
\t\t\t@import '/css/main.css';
\t\t\t@import 'https://getbootstrap.com/docs/4.1/getting-started/introduction/#css';
\t\t</style>

\t</head>
\t<body class=\"no-sidebar is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"#\">{% block pageHeader %}{% endblock %}</a></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!--NAV\t-->
\t\t\t<nav id=\"nav\">
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"break\"><a href=\"{{ url('logout') }}\">Logout</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
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
\t\t\t<script src=\"js/jquery.min.js\"></script>
\t\t\t<script src=\"js/jquery.dropotron.min.js\"></script>
\t\t\t<script src=\"js/browser.min.js\"></script>
\t\t\t<script src=\"js/breakpoints.min.js\"></script>
\t\t\t<script src=\"js/util.js\"></script>
\t\t\t<script src=\"js/main.js\"></script>

\t</body>
</html>", "no-sidebar.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/no-sidebar.html.twig");
    }
}
