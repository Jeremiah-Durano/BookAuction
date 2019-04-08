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

/* index.html.twig */
class __TwigTemplate_669f3088a6fb5bd0351ac96b9a522787b319ae8b291277effec9ad198b16055e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tTelephasic by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
\t<head>
\t\t<title>Telephasic by HTML5 UP</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t</head>
\t<body class=\"homepage is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"index.html.twig\">Telephasic</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Dropdown</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Phasellus consequat</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Phasellus consequat</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Veroeros feugiat</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"left-sidebar.html.twig\">Left Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"break\"><a href=\"right-sidebar.html.twig\">Right Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"no-sidebar.html.twig\">No Sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- Hero -->
\t\t\t\t\t\t<section id=\"hero\" class=\"container\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Telephasic is a responsive
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\tsite template by <a href=\"http://html5up.net\">HTML5 UP</a></h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>Designed and built by <a href=\"http://twitter.com/ajlkn\">AJ</a> and released for free under
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\tthe <a href=\"http://html5up.net/license\">Creative Commons Attribution 3.0 license</a>.</p>
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Get this party started</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t<!-- Features 1 -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured first\"><img src=\"images/pic01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Semper magna neque vel<br />
\t\t\t\t\t\t\t\t\tadipiscing curabitur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
\t\t\t\t\t\t\t\tsem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Amet lorem ipsum dolor<br />
\t\t\t\t\t\t\t\t\tsit consequat magna</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
\t\t\t\t\t\t\t\tsem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Promo -->
\t\t\t\t<div id=\"promo-wrapper\">
\t\t\t\t\t<section id=\"promo\">
\t\t\t\t\t\t<h2>Neque semper magna et lorem ipsum adipiscing</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"button\">Breach the thresholds</a>
\t\t\t\t\t</section>
\t\t\t\t</div>

\t\t\t<!-- Features 2 -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<section class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>Sed magna consequat lorem curabitur tempus</h2>
\t\t\t\t\t\t\t<p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"row features\">
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions major\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t\t<div id=\"footer\" class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>Euismod aliquam vehicula lorem</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
\t\t\t\t\t\t\tdolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"row gtr-50\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" placeholder=\"Name\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" placeholder=\"Email\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" /></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Clear form\" /></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower\">
\t\t\t\t\t\t\t\t<div class=\"row gtr-0\">
\t\t\t\t\t\t\t\t\t<ul class=\"divided icons col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-twitter\"><a href=\"#\"><span class=\"extra\">twitter.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-facebook\"><a href=\"#\"><span class=\"extra\">facebook.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-dribbble\"><a href=\"#\"><span class=\"extra\">dribbble.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"divided icons col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-instagram\"><a href=\"#\"><span class=\"extra\">instagram.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-youtube\"><a href=\"#\"><span class=\"extra\">youtube.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-pinterest\"><a href=\"#\"><span class=\"extra\">pinterest.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"copyright\" class=\"container\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
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

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
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
\t\t<title>Telephasic by HTML5 UP</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t\t<link rel=\"stylesheet\" href=\"css/main.css\" />
\t</head>
\t<body class=\"homepage is-preload\">
\t\t<div id=\"page-wrapper\">

\t\t\t<!-- Header -->
\t\t\t\t<div id=\"header-wrapper\">
\t\t\t\t\t<div id=\"header\" class=\"container\">

\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t<h1 id=\"logo\"><a href=\"index.html.twig\">Telephasic</a></h1>

\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Dropdown</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Phasellus consequat</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Phasellus consequat</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Veroeros feugiat</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"left-sidebar.html.twig\">Left Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"break\"><a href=\"right-sidebar.html.twig\">Right Sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"no-sidebar.html.twig\">No Sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- Hero -->
\t\t\t\t\t\t<section id=\"hero\" class=\"container\">
\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Telephasic is a responsive
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\tsite template by <a href=\"http://html5up.net\">HTML5 UP</a></h2>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t<p>Designed and built by <a href=\"http://twitter.com/ajlkn\">AJ</a> and released for free under
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\tthe <a href=\"http://html5up.net/license\">Creative Commons Attribution 3.0 license</a>.</p>
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Get this party started</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>

\t\t\t\t</div>

\t\t\t<!-- Features 1 -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured first\"><img src=\"images/pic01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Semper magna neque vel<br />
\t\t\t\t\t\t\t\t\tadipiscing curabitur</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
\t\t\t\t\t\t\t\tsem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h2>Amet lorem ipsum dolor<br />
\t\t\t\t\t\t\t\t\tsit consequat magna</h2>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
\t\t\t\t\t\t\t\tsem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<!-- Promo -->
\t\t\t\t<div id=\"promo-wrapper\">
\t\t\t\t\t<section id=\"promo\">
\t\t\t\t\t\t<h2>Neque semper magna et lorem ipsum adipiscing</h2>
\t\t\t\t\t\t<a href=\"#\" class=\"button\">Breach the thresholds</a>
\t\t\t\t\t</section>
\t\t\t\t</div>

\t\t\t<!-- Features 2 -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<section class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>Sed magna consequat lorem curabitur tempus</h2>
\t\t\t\t\t\t\t<p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"row features\">
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"actions major\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t</div>

\t\t\t<!-- Footer -->
\t\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t\t<div id=\"footer\" class=\"container\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>Euismod aliquam vehicula lorem</h2>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
\t\t\t\t\t\t\tdolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"row gtr-50\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" placeholder=\"Name\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" placeholder=\"Email\" type=\"text\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Send Message\" /></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Clear form\" /></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-6 col-12-narrower\">
\t\t\t\t\t\t\t\t<div class=\"row gtr-0\">
\t\t\t\t\t\t\t\t\t<ul class=\"divided icons col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-twitter\"><a href=\"#\"><span class=\"extra\">twitter.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-facebook\"><a href=\"#\"><span class=\"extra\">facebook.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-dribbble\"><a href=\"#\"><span class=\"extra\">dribbble.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"divided icons col-6 col-12-mobile\">
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-instagram\"><a href=\"#\"><span class=\"extra\">instagram.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-youtube\"><a href=\"#\"><span class=\"extra\">youtube.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"icon fa-pinterest\"><a href=\"#\"><span class=\"extra\">pinterest.com/</span>untitled</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"copyright\" class=\"container\">
\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
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
</html>", "index.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/index.html.twig");
    }
}
