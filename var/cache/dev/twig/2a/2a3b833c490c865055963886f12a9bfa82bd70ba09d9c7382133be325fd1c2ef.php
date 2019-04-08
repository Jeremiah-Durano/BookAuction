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

/* base.html.twig */
class __TwigTemplate_6ecb2fa9d60922ffba1d6e3449c0e48afc8532f8139c3593b7cb71697f45d34a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tTelephasic by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Book Auction</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header-wrapper\">
        <div id=\"header\" class=\"container\">

            <!-- Logo -->
            <h1 id=\"logo\"><a href=\"index.html.twig\">Book Auction</a></h1>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                    <li>
                        <a href=\"#\">Dropdown</a>
                        <ul>
                            <li><a href=\"#\">Lorem ipsum dolor</a></li>
                            <li><a href=\"#\">Magna phasellus</a></li>
                            <li><a href=\"#\">Etiam dolore nisl</a></li>
                            <li>
                                <a href=\"#\">Phasellus consequat</a>
                                <ul>
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Phasellus consequat</a></li>
                                    <li><a href=\"#\">Magna phasellus</a></li>
                                    <li><a href=\"#\">Etiam dolore nisl</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <a href=\"left-sidebar.html.twig\">Left Sidebar</a>
                    <li class=\"break\"><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                    <a href=\"no-sidebar.html.twig\">No Sidebar</a>
                </ul>
            </nav>

        </div>

        <!-- Hero -->
        <section id=\"hero\" class=\"container\">
            <header>
                <h2>Welcome to this Second Hand Book Auction Website</h2>
                    <br />

            </header>
            <p>Built by Jeremiah Durano
                <br />

            <!--<ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get this party started</a></li>
            </ul> -->
        </section>

    </div>
    <br />
    <!-- Promo -->
    <div id=\"promo-wrapper\">
        <section id=\"promo\">
            <h2>Neque semper magna et lorem ipsum adipiscing</h2>
            <a href=\"#\" class=\"button\">Breach the thresholds</a>
        </section>
    </div>
    <!-- Features 1 -->
    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured first\"><img src=\"/images/pic01.jpg\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Semper magna neque vel<br />
                            adipiscing curabitur</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
                    </ul>
                </section>
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Amet lorem ipsum dolor<br />
                            sit consequat magna</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>


    <!-- Features 2 -->
    <div class=\"wrapper\">
        <section class=\"container\">
            <header class=\"major\">
                <h2>Sed magna consequat lorem curabitur tempus</h2>
                <p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
            </header>
            <div class=\"row features\">
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
            </div>
            <ul class=\"actions major\">
                <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
            </ul>
        </section>
    </div>

    <!-- Footer -->
    <div id=\"footer-wrapper\">
        <div id=\"footer\" class=\"container\">
            <header class=\"major\">
                <h2>Euismod aliquam vehicula lorem</h2>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
                    dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
            </header>
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower\">
                    <form method=\"post\" action=\"#\">
                        <div class=\"row gtr-50\">
                            <div class=\"col-6 col-12-mobile\">
                                <input name=\"name\" placeholder=\"Name\" type=\"text\" />
                            </div>
                            <div class=\"col-6 col-12-mobile\">
                                <input name=\"email\" placeholder=\"Email\" type=\"text\" />
                            </div>
                            <div class=\"col-12\">
                                <textarea name=\"message\" placeholder=\"Message\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <ul class=\"actions\">
                                    <li><input type=\"submit\" value=\"Send Message\" /></li>
                                    <li><input type=\"reset\" value=\"Clear form\" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section class=\"col-6 col-12-narrower\">
                    <div class=\"row gtr-0\">
                        <ul class=\"divided icons col-6 col-12-mobile\">
                            <li class=\"icon fa-twitter\"><a href=\"#\"><span class=\"extra\">twitter.com/</span>untitled</a></li>
                            <li class=\"icon fa-facebook\"><a href=\"#\"><span class=\"extra\">facebook.com/</span>untitled</a></li>
                            <li class=\"icon fa-dribbble\"><a href=\"#\"><span class=\"extra\">dribbble.com/</span>untitled</a></li>
                        </ul>
                        <ul class=\"divided icons col-6 col-12-mobile\">
                            <li class=\"icon fa-instagram\"><a href=\"#\"><span class=\"extra\">instagram.com/</span>untitled</a></li>
                            <li class=\"icon fa-youtube\"><a href=\"#\"><span class=\"extra\">youtube.com/</span>untitled</a></li>
                            <li class=\"icon fa-pinterest\"><a href=\"#\"><span class=\"extra\">pinterest.com/</span>untitled</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div id=\"copyright\" class=\"container\">
            <ul class=\"menu\">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
            </ul>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/jquery.dropotron.min.js\"></script>
<script src=\"assets/js/browser.min.js\"></script>
<script src=\"assets/js/breakpoints.min.js\"></script>
<script src=\"assets/js/util.js\"></script>
<script src=\"assets/js/main.js\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
<head>
    <title>Book Auction</title>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    <link rel=\"stylesheet\" href=\"css/main.css\" />
</head>
<body class=\"homepage is-preload\">
<div id=\"page-wrapper\">

    <!-- Header -->
    <div id=\"header-wrapper\">
        <div id=\"header\" class=\"container\">

            <!-- Logo -->
            <h1 id=\"logo\"><a href=\"index.html.twig\">Book Auction</a></h1>

            <!-- Nav -->
            <nav id=\"nav\">
                <ul>
                    <li>
                        <a href=\"#\">Dropdown</a>
                        <ul>
                            <li><a href=\"#\">Lorem ipsum dolor</a></li>
                            <li><a href=\"#\">Magna phasellus</a></li>
                            <li><a href=\"#\">Etiam dolore nisl</a></li>
                            <li>
                                <a href=\"#\">Phasellus consequat</a>
                                <ul>
                                    <li><a href=\"#\">Lorem ipsum dolor</a></li>
                                    <li><a href=\"#\">Phasellus consequat</a></li>
                                    <li><a href=\"#\">Magna phasellus</a></li>
                                    <li><a href=\"#\">Etiam dolore nisl</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <a href=\"left-sidebar.html.twig\">Left Sidebar</a>
                    <li class=\"break\"><a href=\"right-sidebar.html\">Right Sidebar</a></li>
                    <a href=\"no-sidebar.html.twig\">No Sidebar</a>
                </ul>
            </nav>

        </div>

        <!-- Hero -->
        <section id=\"hero\" class=\"container\">
            <header>
                <h2>Welcome to this Second Hand Book Auction Website</h2>
                    <br />

            </header>
            <p>Built by Jeremiah Durano
                <br />

            <!--<ul class=\"actions\">
                <li><a href=\"#\" class=\"button\">Get this party started</a></li>
            </ul> -->
        </section>

    </div>
    <br />
    <!-- Promo -->
    <div id=\"promo-wrapper\">
        <section id=\"promo\">
            <h2>Neque semper magna et lorem ipsum adipiscing</h2>
            <a href=\"#\" class=\"button\">Breach the thresholds</a>
        </section>
    </div>
    <!-- Features 1 -->
    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured first\"><img src=\"/images/pic01.jpg\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Semper magna neque vel<br />
                            adipiscing curabitur</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
                    </ul>
                </section>
                <section class=\"col-6 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic02.jpg\" alt=\"\" /></a>
                    </div>
                    <header>
                        <h2>Amet lorem ipsum dolor<br />
                            sit consequat magna</h2>
                    </header>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel
                        sem sit dolor neque semper magna. Lorem ipsum dolor sit amet consectetur et sed
                        adipiscing elit. Curabitur vel sem sit.</p>
                    <ul class=\"actions\">
                        <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>


    <!-- Features 2 -->
    <div class=\"wrapper\">
        <section class=\"container\">
            <header class=\"major\">
                <h2>Sed magna consequat lorem curabitur tempus</h2>
                <p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
            </header>
            <div class=\"row features\">
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper first\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic03.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic04.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
                <section class=\"col-4 col-12-narrower feature\">
                    <div class=\"image-wrapper\">
                        <a href=\"#\" class=\"image featured\"><img src=\"images/pic05.jpg\" alt=\"\" /></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur
                        vel sem sit dolor neque semper magna lorem ipsum.</p>
                </section>
            </div>
            <ul class=\"actions major\">
                <li><a href=\"#\" class=\"button\">Elevate my awareness</a></li>
            </ul>
        </section>
    </div>

    <!-- Footer -->
    <div id=\"footer-wrapper\">
        <div id=\"footer\" class=\"container\">
            <header class=\"major\">
                <h2>Euismod aliquam vehicula lorem</h2>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit<br />
                    dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
            </header>
            <div class=\"row\">
                <section class=\"col-6 col-12-narrower\">
                    <form method=\"post\" action=\"#\">
                        <div class=\"row gtr-50\">
                            <div class=\"col-6 col-12-mobile\">
                                <input name=\"name\" placeholder=\"Name\" type=\"text\" />
                            </div>
                            <div class=\"col-6 col-12-mobile\">
                                <input name=\"email\" placeholder=\"Email\" type=\"text\" />
                            </div>
                            <div class=\"col-12\">
                                <textarea name=\"message\" placeholder=\"Message\"></textarea>
                            </div>
                            <div class=\"col-12\">
                                <ul class=\"actions\">
                                    <li><input type=\"submit\" value=\"Send Message\" /></li>
                                    <li><input type=\"reset\" value=\"Clear form\" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section class=\"col-6 col-12-narrower\">
                    <div class=\"row gtr-0\">
                        <ul class=\"divided icons col-6 col-12-mobile\">
                            <li class=\"icon fa-twitter\"><a href=\"#\"><span class=\"extra\">twitter.com/</span>untitled</a></li>
                            <li class=\"icon fa-facebook\"><a href=\"#\"><span class=\"extra\">facebook.com/</span>untitled</a></li>
                            <li class=\"icon fa-dribbble\"><a href=\"#\"><span class=\"extra\">dribbble.com/</span>untitled</a></li>
                        </ul>
                        <ul class=\"divided icons col-6 col-12-mobile\">
                            <li class=\"icon fa-instagram\"><a href=\"#\"><span class=\"extra\">instagram.com/</span>untitled</a></li>
                            <li class=\"icon fa-youtube\"><a href=\"#\"><span class=\"extra\">youtube.com/</span>untitled</a></li>
                            <li class=\"icon fa-pinterest\"><a href=\"#\"><span class=\"extra\">pinterest.com/</span>untitled</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div id=\"copyright\" class=\"container\">
            <ul class=\"menu\">
                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
            </ul>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src=\"assets/js/jquery.min.js\"></script>
<script src=\"assets/js/jquery.dropotron.min.js\"></script>
<script src=\"assets/js/browser.min.js\"></script>
<script src=\"assets/js/breakpoints.min.js\"></script>
<script src=\"assets/js/util.js\"></script>
<script src=\"assets/js/main.js\"></script>

</body>
</html>", "base.html.twig", "/Users/jeremiah/Desktop/BookAuction/templates/base.html.twig");
    }
}
