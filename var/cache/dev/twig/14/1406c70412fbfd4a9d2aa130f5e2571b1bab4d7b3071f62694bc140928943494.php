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

/* left-sidebar.html.twig */
class __TwigTemplate_5df6926834880ffce6aec71ed3c9a8026ef601474f369a30de25a3441032e5e2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "left-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "left-sidebar.html.twig"));

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
\t<body class=\"left-sidebar is-preload\">
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
\t\t\t\t</div>

\t\t\t<!-- Main -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t\t<div class=\"row gtr-150\">
\t\t\t\t\t\t\t<div class=\"col-4 col-12-narrower\">

\t\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t\t<section id=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Elit sed feugiat</h3>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel
\t\t\t\t\t\t\t\t\t\t\tsem sit amet dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et dolore
\t\t\t\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Magna amet nullam</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic07.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Commodo lorem varius</h3>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel
\t\t\t\t\t\t\t\t\t\t\tsem sit amet dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et dolore
\t\t\t\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Ipsum sed dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-12-narrower imp-narrower\">

\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t\t<article id=\"content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>Left Sidebar</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit
\t\t\t\t\t\t\t\t\t\t\tdolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t<p>Ut sed tortor luctus, gravida nibh eget, volutpat odio. Proin rhoncus, sapien
\t\t\t\t\t\t\t\t\t\tmollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
\t\t\t\t\t\t\t\t\t\tcondimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
\t\t\t\t\t\t\t\t\t\tante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
\t\t\t\t\t\t\t\t\t\teros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
\t\t\t\t\t\t\t\t\t\tturpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
\t\t\t\t\t\t\t\t\t\tPraesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
\t\t\t\t\t\t\t\t\t\t<p>Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit at elementum
\t\t\t\t\t\t\t\t\t\tgravida nibh eget, volutpat odio. Proin rhoncus, sapien
\t\t\t\t\t\t\t\t\t\tmollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
\t\t\t\t\t\t\t\t\t\tcondimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
\t\t\t\t\t\t\t\t\t\tante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
\t\t\t\t\t\t\t\t\t\teros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
\t\t\t\t\t\t\t\t\t\tturpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
\t\t\t\t\t\t\t\t\t\tPraesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
\t\t\t\t\t\t\t\t\t\t<p>Vestibulum pellentesque posuere lorem non aliquam. Mauris eleifend eleifend
\t\t\t\t\t\t\t\t\t\tfelis aliquet ornare. Vestibulum porta velit at elementum elementum.</p>
\t\t\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row features\">
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
        return "left-sidebar.html.twig";
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
\t<body class=\"left-sidebar is-preload\">
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
\t\t\t\t</div>

\t\t\t<!-- Main -->
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t\t<div class=\"container\" id=\"main\">
\t\t\t\t\t\t<div class=\"row gtr-150\">
\t\t\t\t\t\t\t<div class=\"col-4 col-12-narrower\">

\t\t\t\t\t\t\t\t<!-- Sidebar -->
\t\t\t\t\t\t\t\t\t<section id=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Elit sed feugiat</h3>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel
\t\t\t\t\t\t\t\t\t\t\tsem sit amet dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et dolore
\t\t\t\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Magna amet nullam</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic07.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Commodo lorem varius</h3>
\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel
\t\t\t\t\t\t\t\t\t\t\tsem sit amet dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et dolore
\t\t\t\t\t\t\t\t\t\t\tadipiscing elit. Curabitur vel sem sit.</p>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Ipsum sed dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-12-narrower imp-narrower\">

\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t\t<article id=\"content\">
\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t<h2>Left Sidebar</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit
\t\t\t\t\t\t\t\t\t\t\tdolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t<p>Ut sed tortor luctus, gravida nibh eget, volutpat odio. Proin rhoncus, sapien
\t\t\t\t\t\t\t\t\t\tmollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
\t\t\t\t\t\t\t\t\t\tcondimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
\t\t\t\t\t\t\t\t\t\tante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
\t\t\t\t\t\t\t\t\t\teros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
\t\t\t\t\t\t\t\t\t\tturpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
\t\t\t\t\t\t\t\t\t\tPraesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
\t\t\t\t\t\t\t\t\t\t<p>Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit at elementum
\t\t\t\t\t\t\t\t\t\tgravida nibh eget, volutpat odio. Proin rhoncus, sapien
\t\t\t\t\t\t\t\t\t\tmollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum
\t\t\t\t\t\t\t\t\t\tcondimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus
\t\t\t\t\t\t\t\t\t\tante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque
\t\t\t\t\t\t\t\t\t\teros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum et
\t\t\t\t\t\t\t\t\t\tturpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius.
\t\t\t\t\t\t\t\t\t\tPraesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
\t\t\t\t\t\t\t\t\t\t<p>Vestibulum pellentesque posuere lorem non aliquam. Mauris eleifend eleifend
\t\t\t\t\t\t\t\t\t\tfelis aliquet ornare. Vestibulum porta velit at elementum elementum.</p>
\t\t\t\t\t\t\t\t\t</article>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row features\">
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper first\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"col-4 col-12-narrower feature\">
\t\t\t\t\t\t\t\t<div class=\"image-wrapper\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t<h3>Dolor sit consequat magna</h3>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
\t\t\t\t\t\t\t\tvel sem sit dolor neque semper magna lorem ipsum.</p>
\t\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
</html>", "left-sidebar.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/left-sidebar.html.twig");
    }
}
